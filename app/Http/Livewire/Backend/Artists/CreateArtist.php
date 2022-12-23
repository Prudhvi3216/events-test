<?php

namespace App\Http\Livewire\Backend\Artists;

use App\Models\Artist;
use Livewire\Component;

class CreateArtist extends Component
{
    public $name;

    public function save_form()
    {
        $event = new Artist;
        $event->name = $this->name;
        $event->save();
        redirect()->route('view-artists');
    }

    public function render()
    {
        return view('livewire.backend.artists.create-artist');
    }
}