<div>
    <h1 class="text-2xl">Events</h1>
    {{ $events->links() }}
    <form class="flex flex-row gap-4 justify-start place-items-center">
        <div class="flex flex-col">
            <label for="Search">Search</label>
            <x-text-input type="text" wire:model="event_name" />
        </div>
        <!-- <div class="flex flex-col">
            <label for="Search">Artist</label>
            <select wire:model="artist">
                <option disabled>Select Artist</option>
                @foreach ($artists as $artist)
                <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                @endforeach
            </select>
        </div> -->
        <div class="flex flex-col">
            <label for="Search">Genre</label>
            <select wire:model="genre">
                <option value="">Select Genre</option>
                @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col">
            <label for="Search">Venue</label>
            <select wire:model="venue">
                <option value="">Select Venue</option>
                @foreach ($venues as $venue)
                <option value="{{ $venue->id }}">{{ $venue->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col">
            <label for="Search">Date</label>
            <x-text-input type="date" wire:model="date" />
        </div>
    </form>
    <table class="w-full mt-5">
        <thead>
            <tr>
                <th class="p-4 border">Id</th>
                <th class="p-4 border">Image</th>
                <th class="p-4 border">Title</th>
                <th class="p-4 border">Short Description</th>
                <th class="p-4 border">Amount</th>
                <th class="p-4 border">Date</th>
                <th class="p-4 border">Genre</th>
                <th class="p-4 border">Venue</th>
                <th class="p-4 border">Created At</th>
                <th class="p-4 border">Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td class="p-4 border">{{ $event->id }}</td>
                <td class="p-4 border">
                    @if($event->image)
                    <img src="{{ url('storage',$event->image) }}" alt="event-image" width="100px" height="100px">
                    @else
                    <p>No Image</p>
                    @endif
                </td>
                <td class="p-4 border">{{ $event->title }}</td>
                <td class="p-4 border">{{ $event->short_description }}</td>
                <td class="p-4 border">{{ $event->amount }}</td>
                <td class="p-4 border">{{ $event->date }}</td>
                <td class="p-4 border">{{ $event->genre->name }}</td>
                <td class="p-4 border">{{ $event->venue->name }}</td>
                <td class="p-4 border">{{ $event->created_at }}</td>
                <td class="p-4 border">{{ $event->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>