<?php


namespace App\Livewire\Orders;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class ShowOrders extends Component
{
    public $orders;

    public function mount()
    {
        // Fetch only orders belonging to the authenticated user
        $this->orders = Order::where('client_id', Auth::id())->latest()->get();
    }

    public function render()
    {
        return view('livewire.orders.show-orders');
    }
}

