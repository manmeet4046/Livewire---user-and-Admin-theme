<?php

namespace App\Http\Livewire\Admin\Feedback;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Feedback;
class CreateFeedbackForm extends Component
{
    
    public $state =[
        'first_visit'=>"1",
        'gotInfo'=>"1",
    ];
   // public $value=0;
    
   public function mount(){
   // $state['first_visit']=8;
    
   
   }
    public function createFeedback(){

  // dd($this->state);
      
       $validatedData = Validator::make($this->state,[
        'name'=>'required',
        'email'=>'required',
        'visit_reason'=>'required',
        'required_info'=>'required',
       'suggestions'=>'required',
    ])->validate();
     Feedback::create($this->state);
     $this->dispatchBrowserEvent('alert',['message'=>'Appointment created successfully']);
    }
    
    public function render()
    {
        return view('livewire.admin.feedback.create-feedback-form')->layout('layouts.admin');;
    }
}
