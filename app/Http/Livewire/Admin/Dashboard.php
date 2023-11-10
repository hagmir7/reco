<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Shopper\Framework\Repositories\UserRepository;

class Dashboard extends Component
{
    public $new_orders_count;
    public $products_count;
    public $clients_count;
    public $tota_oOrders;

    public function mount()
    {
        $this->new_orders_count = Order::count();
        $this->products_count = Product::count();
        $this->clients_count = (new UserRepository())
            ->makeModel()
            ->whereHas('roles', function (Builder $query) {
                $query->where('name', config('shopper.system.users.default_role'));
            })
            ->count();
        $this->total_orders = Order::count();
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
