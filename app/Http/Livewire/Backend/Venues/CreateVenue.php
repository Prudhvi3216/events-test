<?php

namespace App\Http\Livewire\Backend\Venues;

use App\Models\Venue;
use Livewire\Component;

class CreateVenue extends Component
{
    public $venue;

    protected $rules = [
        'venue.name' => 'nullable',
        'venue.address' => 'nullable',
        'venue.contact_number' => 'nullable',
    ];

    public function save_form()
    {
        $this->validate();
        $venue = new Venue;
        $venue->name = $this->venue['name'];
        $venue->address = $this->venue['address'];
        $venue->contact_number = $this->venue['contact_number'];
        $venue->save();
        redirect()->route('view-venues');
    }

    public function render()
    {
        return view('livewire.backend.venues.create-venue');
    }
}