<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Order;

class StripeWebhookController extends \Laravel\Cashier\Http\Controllers\WebhookController
{
    public function handleInvoicePaid($payload)
    {
        $customerId = $payload['data']['object']['customer'];
        $transactionId = $payload['data']['object']['id'];
        $amount = $payload['data']['object']['amount_paid'] / 100;

        // Trouver l'utilisateur lié à ce customer_id
        $user = \App\Models\User::where('stripe_id', $customerId)->first();

        if ($user) {
            Order::updateOrCreate([
                'transaction_id' => $transactionId,
            ], [
                'client_id' => $user->id,
                'stripe_customer_id' => $customerId,
                'status' => 'paid',
                'amount' => $amount,
            ]);
        }

        return response()->json(['status' => 'success']);
    }
}
