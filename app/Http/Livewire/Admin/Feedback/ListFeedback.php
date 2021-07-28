<?php

namespace App\Http\Livewire\Admin\Feedback;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Feedback;
class ListFeedback extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $state=[];
    public $idBeingRemoved;
    public function render()
    {
        $feedbacks = Feedback::latest()->paginate(5);
        return view('livewire.admin.feedback.list-feedback',compact('feedbacks'))->layout('layouts.admin');
    }


    public function showFeedback($feedbackId){
        $this->idBeingRemoved = $feedbackId;
        $feedback = Feedback::findOrFail($this->idBeingRemoved);
        $this->state = $feedback->toArray();
        $this->dispatchBrowserEvent('show-feedback-modal');

    }

    public function showFeedbackDetails($feedbackId){
        
        $this->dispatchBrowserEvent('show-feedback-modal');

    }


    public function confirmFeedbackRemoval($feedbackId){
        $this->idBeingRemoved = $feedbackId;
        $this->dispatchBrowserEvent('show-delete-modal');

    }

    public function deleteFeedback(){
        $feedback = Feedback::findOrFail($this->idBeingRemoved);
        $feedback->delete();
        $this->dispatchBrowserEvent('hide-delete-modal',['message'=>'Feedback Deleted Successfully']);
    }
}
