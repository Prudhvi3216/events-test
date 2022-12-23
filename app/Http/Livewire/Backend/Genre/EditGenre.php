<?php

namespace App\Http\Livewire\Backend\Genre;

use App\Models\Genre;
use Livewire\Component;

class EditGenre extends Component
{
    public $genre;

    protected $rules = [
        'genre.name' => 'nullable',
    ];

    public function update_form($id)
    {
        $this->validate();
        $genre = Genre::find($id);
        $genre->name = $this->genre->name;
        $genre->update();
        redirect()->route('view-genres');
    }

    public function mount($id)
    {
        $this->genre = Genre::findorFail($id);
    }

    public function render()
    {
        return view('livewire.backend.genre.edit-genre');
    }
}