<?php

namespace App\Http\Livewire\Backend\Events;

use App\Models\Event;
use App\Models\Genre;
use App\Models\Venue;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateEvent extends Component
{
    use WithFileUploads;
    public $event, $genres, $venues, $image;

    protected $rules = [
        'event.title' => 'required',
        'image' => 'nullable|image',
        'event.short_description' => 'required',
        'event.date' => 'required',
        'event.amount' => 'required',
        'event.genre_id' => 'required',
        'event.venue_id' => 'required',
    ];

    public function save_form()
    {
        // $this->validate();
        $record = new Event;
        $record->title = $this->event['title'];
        if ($this->image) {
            $record->image = $this->image->store('event_images', 'public');
        }
        $record->short_description = $this->event['short_description'];
        $record->amount = $this->event['amount'];
        $record->date = $this->event['date'];
        $record->genre_id = $this->event['genre_id'];
        $record->venue_id = $this->event['venue_id'];
        $record->save();
        redirect()->route('view-events');
    }

    public function mount()
    {
        $this->genres = Genre::all();
        $this->venues = Venue::all();
    }

    public function render()
    {
        return view('livewire.backend.events.create-event');
    }
}