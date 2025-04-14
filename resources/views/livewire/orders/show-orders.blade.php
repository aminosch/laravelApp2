<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">My Orders</h2>

    @if ($orders->isEmpty())
        <p>You don't have any orders yet.</p>
    @else
        <table class="w-full border-collapse table-auto">
            <thead class="bg-gray-100 dark:bg-zinc-700 text-left">
            <tr>
                <th class="p-2">Date</th>
                <th class="p-2">Amount</th>
                <th class="p-2">Stripe Customer ID</th>
                <th class="p-2">Transaction ID</th>
                <th class="p-2">Status</th>
                <th class="p-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
                <tr class="border-b">
                    <td class="p-2">{{ $order->date->format('Y-m-d H:i') }}</td>
                    <td class="p-2">€{{ number_format($order->amount, 2) }}</td>
                    <td class="p-2">{{ $order->stripe_customer_id }}</td>
                    <td class="p-2">{{ $order->transaction_id }}</td>
                    <td class="p-2">
                            <span class="inline-flex items-center text-xs font-medium px-2.5 py-0.5 rounded-full
                                {{ $order->status === 'paid' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300' : 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300' }}">
                                <span class="w-2 h-2 me-1 rounded-full {{ $order->status === 'paid' ? 'bg-green-500' : 'bg-red-500' }}"></span>
                                {{ ucfirst($order->status) }}
                            </span>
                    </td>
                    <td class="p-2">
                        <a href="{{ route('orders.show', $order->id) }}"
                           class="text-blue-600 hover:text-blue-800"
                           title="View Invoice">
                            <!-- Icône œil -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 3C5 3 1.73 7.11 1 10c.73 2.89 4 7 9 7s8.27-4.11 9-7c-.73-2.89-4-7-9-7zM10 15a5 5 0 110-10 5 5 0 010 10z"/>
                                <path d="M10 7a3 3 0 100 6 3 3 0 000-6z"/>
                            </svg>
                        </a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
