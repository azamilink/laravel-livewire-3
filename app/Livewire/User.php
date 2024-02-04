<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use App\Models\User as ModelsUser;

#[Layout('layouts.template')]

class User extends Component
{
    use WithPagination;

    public $searchTerm;

    public function render()
    {
        $search = '%' . $this->searchTerm . '%';
        $users = ModelsUser::where('name', 'LIKE', $search)
            ->orWhere('email', 'LIKE', $search)
            ->paginate(10);
        return view('livewire.user', compact('users'));
        /*
        return <<<'HTML'
        <div>
            <h1>This is User inline component</h1>
        </div>
        HTML;
        */
    }
}
