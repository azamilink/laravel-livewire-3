<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.template')]

class Form extends Component
{
    public $name;
    public $message;
    public $marital_status;
    public $colors;
    public $fruit;

    public function render()
    {
        return view('livewire.form');
    }
}
