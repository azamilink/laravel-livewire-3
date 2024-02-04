<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Product extends Component
{
    public $title;
    public $name;
    public $infos = [];

    #[Layout('layouts.template')]
    public function mount()
    {
        $this->infos[] = 'Aplication is mount...';
    }

    public function hydrate()
    {
        $this->infos[] = 'Apliction is hydrate...';
    }

    public function updating($name, $value)
    {
        $this->infos[] = 'Apliction is updating...';
    }

    public function updated($name, $value)
    {
        $this->infos[] = 'Apliction is updated...';
    }

    public function updatingName()
    {
        $this->infos[] = 'Apliction is updating name property...';
    }

    public function updatedName()
    {
        $this->infos[] = 'Apliction is updated name property...';
    }

    public function render()
    {
        return view('livewire.product');
    }
}
