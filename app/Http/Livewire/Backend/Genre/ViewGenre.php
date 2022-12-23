<?php

namespace App\Http\Livewire\Backend\Genre;

use App\Models\Genre;
use Livewire\Component;

class ViewGenre extends Component
{
    public $genres;

    public function delete_record($id)
    {
        Genre::find($id)->delete();
    }

    public function render()
    {
        $this->genres = Genre::all();
        return view('livewire.backend.genre.view-genre');
    }
}