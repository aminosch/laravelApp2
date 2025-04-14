<div class="p-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Order Details</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white dark:bg-zinc-800 p-6 rounded-xl shadow-md">
        <!-- Transaction Info -->
        <div class="space-y-2">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Transaction</h3>
            <p><span class="font-medium text-gray-600 dark:text-gray-400">Transaction ID:</span> {{ $order->transaction_id }}</p>
            <p><span class="font-medium text-gray-600 dark:text-gray-400">Date:</span> {{ $order->date->format('Y-m-d H:i') }}</p>
            <p><span class="font-medium text-gray-600 dark:text-gray-400">Amount:</span> €{{ number_format($order->amount, 2) }}</p>
            <p><span class="font-medium text-gray-600 dark:text-gray-400">Status:</span>
                <span class="inline-block px-2 py-1 text-xs rounded-full
                    {{ $order->status === 'paid' ? 'bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300' : 'bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-300' }}">
                    {{ ucfirst($order->status) }}
                </span>
            </p>
        </div>

        <!-- Client Info -->
        <div class="space-y-2">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Client</h3>
            <p><span class="font-medium text-gray-600 dark:text-gray-400">Name:</span> {{ $order->client->name ?? 'N/A' }}</p>
            <p><span class="font-medium text-gray-600 dark:text-gray-400">Email:</span> {{ $order->client->email ?? 'N/A' }}</p>
            <p><span class="font-medium text-gray-600 dark:text-gray-400">Stripe ID:</span> {{ $order->stripe_customer_id }}</p>
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
