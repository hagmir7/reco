<?php

namespace App\Http\Livewire;

use App\Services\PlaceOrder;
use WireUi\Traits\Actions;

class Checkout extends CartManager
{
    use Actions;

    public string $last_name = '';

    public string $first_name = '';

    public string $email = '';

    public string $phone_number = '';

    public string $address = '';

    protected function rules(): array
    {
        return [
            'last_name' => 'required|max:150',
            'first_name' => 'required|max:150',
            'email' => 'required|email|max:250',
            'phone_number' => ['required', 'max:10', 'regex:/(0|\+212)?(5|6|7|8)?[0-9]{8}/'],
            'address' => 'required|max:150',
        ];
    }

    protected function messages(): array
    {
        return [
            'phone_number.regex' => 'le numéro de telephone doit être de la format 05|6|7|8xxxxxxxx',
        ];
    }

    protected $listeners = ['refresh-cart' => '$refresh'];

    public function applyCoupon()
    {
        $this->discount = Discount::where('is_active', true)
            ->where('code', $this->coupon_code)
            ->whereDate('start_at', '<=', now())
            ->whereDate('end_at', '>=', now())->first();

        $discount = $this->discount;

        $this->validate([
            'coupon_code' => [
                'required',
                function ($attribute, $value, $fail) use ($discount) {

                    if (is_null($discount)) {
                        $fail("Le code promo n'est pas valide.");
                    }

                    if (! is_null($discount) && $discount->hasReachedLimit()) {
                        $this->discount = null;
                        $fail('Ce code promo a atteint ces limites');
                    }

                    if (! is_null($discount) && $discount->min_required == 'price' && $discount->min_required_value > $this->sub_total) {
                        $this->discount = null;
                        $fail("Ce code promo n'est applicable que pour les commandes supérieures à ".$discount->min_required_value.' Dhs');
                    }

                    if (! is_null($discount) && $discount->min_required == 'quantity' && $discount->min_required_value > $this->products_count) {
                        $this->discount = null;
                        $fail("Ce code promo s'applique uniquement aux commandes avec un minimum de ".$discount->min_required_value.' produits.');
                    }
                },
            ],
        ]);

        $this->discountValue = 0;

        if (! is_null($this->discount) && $this->discount->type == 'percentage') {
            $this->discountValue = ($this->discount->value / 100) * $this->sub_total;
        } elseif (! is_null($this->discount) && $this->discount->type == 'fixed_amount') {
            $this->discountValue = $this->discount->value;
        }
    }

    public function checkout()
    {
        if (! \Cart::getContent()->count()) {
            return;
        }

        PlaceOrder::store(
            $this->validate(),
            null
            //            $this->discount
        );

        $this->reset();

        \Cart::clear();

        $this->emit('refresh-cart');

        $this->dialog()->success(
            $title = 'Commande envoyée!',
            $description = 'Votre commande a été enregistrée avec succès!'
        );
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}
