<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Layout('layouts.template')]
#[Title('Home')]

class Home extends Component
{
    public $name;

    public function mount($name = null)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.home');
    }
}
