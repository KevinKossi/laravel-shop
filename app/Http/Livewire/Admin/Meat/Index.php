<?php

namespace App\Http\Livewire\Admin\Meat;

use App\Models\Meat;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component

{
    use WithPagination;
    protected $paginationTheme = 'bootstrap'; 
    public $name, $weight, $status ; // var die nog assigned moeten worden 
    public $description, $meats_id;
    public function rules(){
        return[
            'name' => 'required|string',
            'weight'=> 'required|string',
            'description' =>'string|nullable',
            'status'=>'nullable',
        ];
        
    }
    
    public function resetInput() {
        $this->name = NULL;
        $this->weight = NULL;
        $this->status = NULL;
        $this->description = NULL;
        $this->meats_id = NULL;

        
    }
    public function storeMeat(){
       
 
        $validatedData = $this->validate();
        Meat::create([
            "name" =>$this->name ,
            "weight"=>$this->weight,
            "description"=>$this->description,
            "status"=>$this -> status == true ? '1' : '0',
        ]);
        session()->flash('message','Meat succesfully added');
        $this->dispatchBrowserEvent('close-mondal');
        $this->resetInput();
    
    }
    public function closeModal()  {
        $this->resetInput();
    }
    public function openModal()  {
        $this->resetInput();
    }
    public function deleteMeat($meats_id)  {
        $this->$meats_id = $meats_id;

    }
    function destroyMeat() {
     Meat::findOrFail($this->meats_id)->delete(); 
     session()->flash('message','Meat succesfully deletd');
     $this->dispatchBrowserEvent('close-mondal');
     $this->resetInput(); 
    }
   public function updateMeat() {
         
        $validatedData = $this->validate();
        Meat::findOrFail($meats_id)->update([
            "name" =>$this->name ,
            "weight"=>$this->weight,
            "description"=>$this->description,
            "status"=>$this -> status == true ? '1' : '0',
        ]);
        session()->flash('message','Meat succesfully updated');
        $this->dispatchBrowserEvent('close-mondal');
        $this->resetInput();
    
    }
    
   public function editMeat(int $meats_id)  {
        $meat = Meat::findOrFail($meats_id);
            $this->meats_id = $meats_id;
           $this->name =  $meat->name; 
           $this->description =  $meat->description;
           $this->weight = $meat->weight; 
            $this->status =  $meat->status; 
    }
    public function render()
    {
        $meats = Meat::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.meat.index', ['meats' => $meats])
                    ->extends('layouts.Admin')
                    ->section('content');
                        
                         
    }
}
