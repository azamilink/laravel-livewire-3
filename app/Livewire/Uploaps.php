<?php

namespace App\Livewire;

use App\Models\Upload;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;


#[Layout('layouts.template')]
class Uploaps extends Component
{
    use WithFileUploads;

    public $title;
    public $filename;

    public function fileUpload()
    {
        $validateData = $this->validate([
            'title' => 'required',
            'filename' => 'required',
        ]);
        $filename = $this->filename->store('files', 'public');
        $validateData['filename'] = $filename;
        Upload::create($validateData);
        session()->flash('message', 'File successfully uploaded');
        $this->dispatch('fileUploaded');
    }

    public function render()
    {
        return view('livewire.uploaps');
    }
}
