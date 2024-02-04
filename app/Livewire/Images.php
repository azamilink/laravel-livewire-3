<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

#[Layout('layouts.template')]
class Images extends Component
{
    public $images = [];

    use WithFileUploads;
    public function uploadImages()
    {
        $this->validate([
            'images' => 'required',
        ]);

        foreach ($this->images as $key => $image) {
            $this->images[$key] = $image->store('images', 'public');
        }
        $this->images = json_encode($this->images);
        Image::create(['filename' => $this->images]);
        session()->flash('message', 'Images successfully uploaded');
        $this->dispatch('imagesUploaded');
    }

    public function render()
    {
        return view('livewire.images');
    }
}
