<?php

namespace App\Http\Livewire\Backend\Genre;

use App\Models\Genre;
use Livewire\Component;

class CreateGenre extends Component
{
    public $name;

    public function save_form()
    {
        $event = new Genre;
        $event->name = $this->name;
        $event->save();
        redirect()->route('view-genres');
    }

    public function render()
    {
        return view('livewire.backend.genre.create-genre');
    }
}