<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factuur #{{ $order->stripe_transaction_id }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
            color: #2d3748;
            margin: 0;
            padding: 40px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .app-name {
            font-size: 24px;
            font-weight: bold;
            color: #4a5568;
        }

        .invoice-title {
            font-size: 20px;
            font-weight: bold;
            text-align: right;
            color: #2d3748;
        }

        .grid-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .section-title {
            font-weight: bold;
            margin-bottom: 8px;
            color: #4a5568;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 40px;
        }

        th, td {
            border: 1px solid #e2e8f0;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f7fafc;
        }

        .footer {
            margin-top: 40px;
            font-size: 13px;
            color: #718096;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="app-name">{{ config('app.name', 'LaravelApp') }}</div>
    <div class="invoice-title">Factuur</div>
</div>

<div class="grid-container">
    <div>
        <div class="section-title">Transactiegegevens</div>
        <p><strong>Datum:</strong> {{ $order->created_at->format('Y-m-d H:i') }}</p>
        <p><strong>Transactie-ID:</strong> {{ $order->stripe_transaction_id }}</p>
        <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>
    </div>

    <div>
        <div class="section-title">Klantgegevens</div>
        <p><strong>Naam:</strong> {{ $user->name }}</p>
        <p><strong>E-mail:</strong> {{ $user->email }}</p>
    </div>
</div>

<table>
    <thead>
    <tr>
        <th>Beschrijving</th>
        <th>Bedrag</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            Abonnement {{ $order->plan->name ?? 'Onbekend plan' }}
        </td>
        <td>€{{ number_format($order->amount, 2) }}</td>
    </tr>
    </tbody>
</table>

<div class="footer">
    <p>Bedankt voor je aankoop!</p>
    <p>Als je vragen hebt, neem contact met ons op via {{ config('mail.from.address') ?? 'support@site.com' }}</p>
</div>
</body>
</html>
