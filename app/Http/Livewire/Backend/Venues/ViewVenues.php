<?php

namespace App\Http\Livewire\Backend\Venues;

use App\Models\Venue;
use Livewire\Component;

class ViewVenues extends Component
{
    public $venues;

    public function delete_record($id)
    {
        Venue::find($id)->delete();
    }

    public function render()
    {
        $this->venues = Venue::all();
        return view('livewire.backend.venues.view-venues');
    }
}