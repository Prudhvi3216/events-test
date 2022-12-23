<?php

namespace App\Http\Livewire\Backend\Artists;

use App\Models\Artist;
use Livewire\Component;

class EditArtist extends Component
{

    public $artist;

    protected $rules = [
        'artist.name' => 'nullable',
    ];

    public function update_form($id)
    {
        $this->validate();
        $artist = Artist::find($id);
        $artist->name = $this->artist->name;
        $artist->update();
        redirect()->route('view-artists');
    }

    public function mount($id)
    {
        $this->artist = Artist::findorFail($id);
    }

    public function render()
    {
        return view('livewire.backend.artists.edit-artist');
    }
}