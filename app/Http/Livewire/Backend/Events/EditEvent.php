<?php

namespace App\Http\Livewire\Backend\Events;

use App\Models\Event;
use App\Models\Genre;
use App\Models\Venue;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditEvent extends Component
{
    use WithFileUploads;

    public $event, $genres, $venues, $image, $replace_image;

    protected $rules = [
        'event.title' => 'required',
        'image' => 'nullable|image',
        'event.short_description' => 'required',
        'event.date' => 'required',
        'event.amount' => 'required',
        'event.genre_id' => 'required',
        'event.venue_id' => 'required',
    ];

    public function update_form($id)
    {
        // $this->validate();
        $record = Event::find($id);
        $record->title = $this->event['title'];
        if ($this->replace_image) {
            //need to delete stored image
            $record->image = $this->replace_image->store('event_images', 'public');
        }
        if ($this->image) {
            $record->image = $this->image->store('event_images', 'public');
        }
        $record->short_description = $this->event['short_description'];
        $record->amount = $this->event['amount'];
        $record->date = $this->event['date'];
        $record->genre_id = $this->event['genre_id'];
        $record->venue_id = $this->event['venue_id'];
        $record->update();
        redirect()->route('view-events');
    }

    public function mount($id)
    {
        $this->event = Event::findorFail($id);
        $this->genres = Genre::all();
        $this->venues = Venue::all();
    }

    public function render()
    {
        return view('livewire.backend.events.edit-event');
    }
}