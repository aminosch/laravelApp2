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
        // ✅ Correct: alleen bestellingen van de ingelogde gebruiker
        $this->orders = Order::where('user_id', Auth::id())->latest()->get();
    }

    public function render()
    {
        return view('livewire.orders.show-orders');
    }
}
