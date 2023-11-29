<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Shopper\Framework\Models\Shop\Order\OrderStatus;
use Shopper\Framework\Repositories\UserRepository;

class Dashboard extends Component
{
    public $new_orders_count;

    public $products_count;

    public $clients_count;

    public $today_clients_count;

    public $tota_oOrders;

    public function mount()
    {
        $this->new_orders_count = Order::where('status', OrderStatus::PENDING)->count();
        $this->products_count = Product::count();
        $clients_base_query = (new UserRepository())
            ->makeModel()
            ->whereHas('roles', function (Builder $query) {
                $query->where('name', config('shopper.system.users.default_role'));
            });
        $this->clients_count = $clients_base_query->count();
        $this->today_clients_count = $clients_base_query->whereBetween('created_at', [now()->startOfDay(), now()->endOfDay()])->count();
        $this->total_orders = Order::count();
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
