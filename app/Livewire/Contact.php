<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

#[Title('Contact')]
#[Layout('layouts.template')]

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $msg;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'msg' => 'required|min:20',
        ]);
    }

    public function submitForm()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'msg' => 'required|min:20',
        ]);
        dd($this->name, $this->email, $this->phone, $this->msg);
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
