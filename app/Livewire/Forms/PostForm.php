<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class PostForm extends Form
{
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $body = '';

    public function store()
    {
        $post = Auth::user()->posts()->create($this->validate());

        flash('Post created successfully', 'info');
        $this->reset();

        return $post;
    }
}
