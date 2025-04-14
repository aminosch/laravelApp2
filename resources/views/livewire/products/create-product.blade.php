<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">Nieuw Product</h2>
    <a href="{{ route('products.index') }}" class="inline-block mb-4 text-blue-600 hover:underline">
        ← Terug naar lijst
    </a>


@if (session()->has('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="save" class="space-y-4 max-w-xl">
        <div>
            <label for="name" class="block font-semibold">Naam</label>
            <input type="text" wire:model.defer="form.name" id="name" class="w-full border rounded p-2" />
            @error('form.name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        @can('generateDescription', \App\Models\Product::class)
            <div class="flex items-center gap-2 mt-2">
                <button type="button"
                        wire:click="generateDescription"
                        class="bg-purple-600 text-white px-3 py-1 rounded hover:bg-purple-700">
                    Genereer Beschrijving
                </button>

                <span class="text-sm text-gray-500">Gebruik de AI om automatisch een beschrijving te maken.</span>
            </div>
        @endcan

        <div>
            <label for="description" class="block font-semibold">Beschrijving</label>
            <textarea wire:model.defer="form.description" id="description" class="w-full border rounded p-2"></textarea>
            @error('form.description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="price" class="block font-semibold">Prijs (€)</label>
            <input type="number" wire:model.defer="form.price" step="0.01" id="price" class="w-full border rounded p-2" />
            @error('form.price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>


        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Opslaan</button>
    </form>
</div>

