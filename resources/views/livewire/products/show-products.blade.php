<div class="p-4">
    <h2 class="text-xl font-bold mb-4">Productenlijst</h2>
    <div class="flex justify-end mb-4">
        <a href="{{ route('products.create') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
            Nieuw Product
        </a>
    </div>
    <table class="table-auto w-full border">
        <thead>
        <tr class="bg-gray-200">
            <th class="border px-4 py-2">ID</th>
            <th class="border px-4 py-2">Naam</th>
            <th class="border px-4 py-2">Beschrijving</th>
            <th class="border px-4 py-2">Prijs</th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
            <tr>
                <td class="border px-4 py-2">{{ $product->id }}</td>
                <td class="border px-4 py-2">{{ $product->name }}</td>
                <td class="border px-4 py-2">{{ $product->description }}</td>
                <td class="border px-4 py-2">€ {{ number_format($product->price, 2, ',', '.') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="border px-4 py-2 text-center">Geen producten gevonden.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

