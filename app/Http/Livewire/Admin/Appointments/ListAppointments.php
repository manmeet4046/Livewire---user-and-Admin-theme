<?php

namespace App\Http\Livewire\Admin\Appointments;

use App\Models\Appointment;
use Livewire\Component;
use Livewire\WithPagination;
class ListAppointments extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $appointments = Appointment::with('client')
        ->latest()
        ->paginate(5);
        
        return view('livewire.admin.appointments.list-appointments',compact('appointments'))->layout('layouts.admin');
    }
}
