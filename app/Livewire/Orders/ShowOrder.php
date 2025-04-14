<?php


namespace App\Livewire\Orders;

use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ShowOrder extends Component
{
    public Order $order;

    public function mount(Order $order)
    {
        // Vérifie que l'utilisateur a le droit de voir cette facture
        abort_if($order->client_id !== Auth::id(), 403);
        $this->order = $order;
    }

    public function download(): StreamedResponse
    {
        $pdf = Pdf::loadView('livewire.orders.orderPDF', [
            'order' => $this->order,
            'user' => Auth::user(),
        ]);

        return response()->streamDownload(
            fn () => print($pdf->output()),
            'order-'.$this->order->transaction_id.'.pdf'
        );
    }

    public function render()
    {
        return view('livewire.orders.show-order');
    }
}

