<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice #{{ $order->transaction_id }}</title>
    <style>
        body { font-family: sans-serif; }
        h1 { font-size: 24px; margin-bottom: 0; }
        .app-name {
            font-size: 20px;
            font-weight: bold;
            color: #4A5568;
        }
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 10px;
        }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f5f5f5; }
    </style>
</head>
<body>
<div class="app-name">{{ config('app.name', 'LaravelApp') }}</div>
<h1>Invoice</h1>

<div class="grid-container">
    <!-- Transaction Info -->
    <div>
        <p><strong>Date:</strong> {{ $order->created_at->format('Y-m-d H:i') }}</p>
        <p><strong>Transaction ID:</strong> {{ $order->transaction_id }}</p>
        <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
    </div>

    <!-- Client Info -->
    <div>
        <p><strong>Client Name:</strong> {{ $order->client->name ?? 'N/A' }}</p>
        <p><strong>Client Email:</strong> {{ $order->client->email ?? 'N/A' }}</p>
        <p><strong>Stripe ID:</strong> {{ $order->stripe_customer_id }}</p>
    </div>
</div>

<table>
    <thead>
    <tr>
        <th>Description</th>
        <th>Amount</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            SaaS Subscription
            ({{ ucfirst($order->client?->currentPlan()?->name ?? 'Unknown Plan') }})
        </td>
        <td>€{{ number_format($order->amount, 2) }}</td>
    </tr>
    </tbody>
</table>

<p style="margin-top: 20px;">Thanks for your purchase!</p>
</body>
</html>
