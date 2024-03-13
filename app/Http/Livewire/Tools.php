<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Tool;
class Tools extends Component
{
   public $tools, $size, $color,$function, $tools_id;
   public $isOpen = 0;
   /**
    * The attributes that are mass assignable.
    *
    * @var array
   */
   public function render()
   {
       $this->tools = Tool::all();
       return view('livewire.tools');
   }
   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   public function creates()
   {
       $this->resetInputFields();
       $this->openModal();
   }
   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   public function openModal()
   {
       $this->isOpen = true;
   }
   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   public function closeModal()
   {
       $this->isOpen = false;
   }
   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   private function resetInputFields(){
       $this->size = '';
       $this->color = '';
       $this->function = '';
       $this->tools_id = '';
   }
   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   public function store()
   {
       $this->validate([
           'size' => 'required',
           'color' => 'required',
           'function' => 'required',
       ]);

       Tool::updateOrCreates(['id' => $this->tools_id], [
        //    'tools_id' =>$this->tools_id,
           'size' => $this->size,
           'color' => $this->color,
           'function'=> $this->function,
       ]);

       session()->flash('message',
           $this->tools_id ? 'Tools Updated Successfully.' : 'Tools Created Successfully.');

       $this->closeModal();
       $this->resetInputFields();
   }
   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   public function edit($id)
   {
       $tool = Tool::findOrFail($id);
       $this->tools_id =$id;
       $this->size = $tool->size;
       $this->color = $tool->color;
       $this->function = $tool->function;


       $this->openModal();
   }
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   public function delete($id)
   {
       Tool::find($id)->delete();
       session()->flash('message', 'Tools Deleted Successfully.');
   }
}
