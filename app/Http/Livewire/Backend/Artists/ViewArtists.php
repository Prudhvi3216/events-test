<?php

namespace App\Http\Livewire\Backend\Artists;

use App\Models\Artist;
use Livewire\Component;

class ViewArtists extends Component
{
    public $artists;

    public function delete_record($id)
    {
        Artist::find($id)->delete();
    }

    public function render()
    {
        $this->artists = Artist::all();
        return view('livewire.backend.artists.view-artists');
    }
}