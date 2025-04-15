<div class="p-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Order Details</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white dark:bg-zinc-800 p-6 rounded-xl shadow-md">
        <!-- Transaction Info -->
        <div class="space-y-2">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Transactie</h3>
            <p><span class="font-medium text-gray-600 dark:text-gray-400">Transactie-ID:</span> {{ $order->stripe_transaction_id }}</p>
            <p><span class="font-medium text-gray-600 dark:text-gray-400">Datum:</span> {{ $order->created_at->format('Y-m-d H:i') }}</p>
            <p><span class="font-medium text-gray-600 dark:text-gray-400">Bedrag:</span> €{{ number_format($order->amount, 2) }}</p>
            <p><span class="font-medium text-gray-600 dark:text-gray-400">Status:</span>
                <span class="inline-block px-2 py-1 text-xs rounded-full
                    {{ $order->status === 'paid' ? 'bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300' : 'bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-300' }}">
                    {{ ucfirst($order->status) }}
                </span>
            </p>
        </div>

        <!-- Gebruiker Info -->
        <div class="space-y-2">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Gebruiker</h3>
            <p><span class="font-medium text-gray-600 dark:text-gray-400">Naam:</span> {{ $order->user->name ?? 'N/A' }}</p>
            <p><span class="font-medium text-gray-600 dark:text-gray-400">E-mail:</span> {{ $order->user->email ?? 'N/A' }}</p>
        </div>
    </div>

    <div class="mt-6 text-right">
        <button
            wire:click="download"
            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition">
            Download PDF
        </button>
    </div>
</div>
