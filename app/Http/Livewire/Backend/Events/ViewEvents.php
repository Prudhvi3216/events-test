<?php

namespace App\Http\Livewire\Backend\Events;

use App\Models\Event;
use Livewire\Component;

class ViewEvents extends Component
{
    public $events;

    public function delete_record($id)
    {
        Event::find($id)->delete();
    }

    public function render()
    {
        $this->events = Event::with(['genre', 'venue'])->orderBy('id', 'desc')->get();
        return view('livewire.backend.events.view-events');
    }
}