<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.template')]
class Action extends Component
{
    public $sum;
    public $num1;
    public $num2;
    public $result;
    public $message;

    public function addTwoNumbers($num1, $num2)
    {
        $this->sum = $num1 + $num2;
    }

    public function getSum()
    {
        $this->result = $this->num1 + $this->num2;
    }

    public function displayMessage($msg)
    {
        $this->message = $msg;
    }

    public function render()
    {
        return view('livewire.action');
    }
}
