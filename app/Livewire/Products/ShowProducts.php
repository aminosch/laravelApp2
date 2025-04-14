<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class ShowProducts extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.products.show-products');
    }
}

