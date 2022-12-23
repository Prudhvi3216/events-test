<?php

namespace App\Http\Livewire;

use App\Models\Artist;
use App\Models\Event;
use App\Models\Genre;
use App\Models\Venue;
use Livewire\Component;
use Livewire\WithPagination;

class HomePage extends Component
{
    use WithPagination;

    public $event_name, $artist, $genre, $venue, $date;
    public $venues, $genres, $artists;

    public function render()
    {
        $search_value = $this->event_name;
        $artist = $this->artist;
        $genre = $this->genre;
        $venue = $this->venue;
        $date = $this->date;

        $this->venues = Venue::all();
        $this->genres = Genre::all();
        $this->artists = Artist::all();

        $paginated_data = Event::with(
            ['genre', 'venue']
        )
            ->when($artist, function ($query) use ($artist) {
                $query->where('title', $artist);
            })
            ->when($genre, function ($query) use ($genre) {
                $query->where('genre_id', $genre);
            })
            ->when($venue, function ($query) use ($venue) {
                $query->where('venue_id', $venue);
            })
            ->when($date, function ($query) use ($date) {
                $query->whereDate('date', $date);
            })
            ->when($search_value, function ($query) use ($search_value) {
                $query->where('title', "LIKE", "%" . $search_value . "%");
            })->orderBy('id', 'desc')->paginate(10);

        return view('livewire.home-page', [
            'events' => $paginated_data
        ])->layout('layouts.master');
    }
}