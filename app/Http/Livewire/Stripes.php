<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Stripe;


class Stripes extends Component
{
    public $stripes, $card_number, $cvv,$expiration,$year, $stripe_id;
    public $isOpen = 0;
    public function render()
    {
        $this->stripes = Stripe::all();

        return view('livewire.stripes');
    }
}
