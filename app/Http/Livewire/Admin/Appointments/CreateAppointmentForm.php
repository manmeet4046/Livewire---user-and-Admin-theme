<?php

namespace App\Http\Livewire\Admin\Appointments;

use App\Models\Appointment;
use Livewire\Component;
use App\Models\Client;
use Illuminate\Support\Facades\Validator;
class CreateAppointmentForm extends Component
{

    public $state =[
        'status'=>'SCHEDULE',
    ];

    public function createAppointment(){
        
        $validatedData = Validator::make($this->state,[
            'client_id'=>'required',
            'date'=>'required',
            'time'=>'required',
            'note'=>'required',
            'status'=>'required',
        ])->validate();
        
        Appointment::create($this->state);
        $this->dispatchBrowserEvent('alert',['message'=>'Appointment created successfully']);
        
    }
    public function render()
    {
        $clients = Client::all();
        return view('livewire.admin.appointments.create-appointment-form',compact('clients'));
    }
}
