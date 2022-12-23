<?php

namespace App\Http\Livewire\Backend\Venues;

use App\Models\Venue;
use Livewire\Component;

class EditVenue extends Component
{
    public $venue;

    protected $rules = [
        'venue.name' => 'nullable',
        'venue.address' => 'nullable',
        'venue.contact_number' => 'nullable',
    ];

    public function update_form($id)
    {
        $this->validate();
        $venue = Venue::find($id);
        $venue->name = $this->venue['name'];
        $venue->address = $this->venue['address'];
        $venue->contact_number = $this->venue['contact_number'];
        $venue->update();
        redirect()->route('view-venues');
    }

    public function mount($id)
    {
        $this->venue = Venue::findorFail($id);
    }

    public function render()
    {
        return view('livewire.backend.venues.edit-venue');
    }
}