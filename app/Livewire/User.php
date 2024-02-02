<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;


#[Layout('layouts.template')]

class User extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            <h1>This is User inline component</h1>
        </div>
        HTML;
    }
}
