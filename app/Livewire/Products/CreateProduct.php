<?php

namespace App\Livewire\Products;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use App\Models\Product;

class CreateProduct extends Component
{
    public $form = [
        'name' => '',
        'description' => '',
        'price' => '',
    ];
    public function rules(): array
    {
        return [
            'form.name' => ['required', 'string', 'min:3'],
            'form.description' => ['nullable', 'string'],
            'form.price' => ['required', 'numeric', 'min:0'],
        ];
    }
    public function messages(): array
    {
        return [
            'form.name.required' => 'De naam is verplicht.',
            'form.name.min' => 'De naam moet minstens :min tekens bevatten.',
            'form.price.required' => 'De prijs is verplicht.',
            'form.price.numeric' => 'De prijs moet een getal zijn.',
            'form.price.min' => 'De prijs moet minimaal :min euro zijn.',
        ];
    }


    public function save()
    {
        $this->validate();

        Product::create($this->form);

        session()->flash('success', 'Product succesvol aangemaakt.');
        return redirect()->route('products.index');
    }

    public function generateDescription()
    {
        if (empty($this->form['name'])) {
            $this->addError('form.name', 'Geef eerst een productnaam op.');
            return;
        }

        $response = Http::withToken(config('services.groq.key'))->post('https://api.groq.com/openai/v1/chat/completions', [
            'model' => 'llama3-70b-8192',
            'messages' => [
                ['role' => 'system', 'content' => 'Je bent een copywriter voor een webshop.'],
                ['role' => 'user', 'content' => 'Schrijf een korte, aantrekkelijke beschrijving voor het product: ' . $this->form['name']],
            ],
            'temperature' => 0.7,
        ]);


        $this->form['description'] = $response['choices'][0]['message']['content'] ?? 'Geen beschrijving gevonden.';
    }

    public function render()
    {
        return view('livewire.products.create-product');
    }
}

