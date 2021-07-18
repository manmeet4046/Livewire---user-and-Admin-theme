<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class HomePage extends Component
{
    public $openOffer=false;
    public $openConformance=false;
    public $openPolicy=false;
    
    public function openOffer(){
        $this->openOffer=true;
        $this->openPolicy=false;
        $this->openConformance=false;
       
        $this->dispatchBrowserEvent('show-modalHomePage');
    }
    public function openConformance(){
        $this->openConformance=true;
        $this->openOffer=false;
        $this->openPolicy=false;
        $this->dispatchBrowserEvent('show-modalHomePage');
    }
    public function openPolicy(){
        $this->openPolicy=true;
        $this->openConformance=false;
        $this->openOffer=false;
        $this->dispatchBrowserEvent('show-modalHomePage');
    }
    public function render()
    {
        return view('livewire.users.home-page');
    }
}
