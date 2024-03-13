<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Facebook;
class Facebooks extends Component
{
   public $facebooks, $title, $url,$category,$description, $facebook_id;
   public $isOpen = 0;
   /**
    * The attributes that are mass assignable.
    *
    * @var array
   */
   public function render()
   {
       $this->facebooks = Facebook::all();
       return view('livewire.facebooks');
   }
}
