<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginForm extends Form
{
    #[Rule('required', 'email')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';

    public function store()
    {
        if (Auth::attempt($this->validate())) {
            return redirect()->route('timeline');
        }

        throw ValidationException::withMessages([
            'email' => 'The provided credential do nont match our records',
        ]);
    }
}
