<div class="p-8">
    <x-nav-link href="{{ route('create-event') }}">
        Create Event
    </x-nav-link>
    <table class="w-full mt-5">
        <thead>
            <tr>
                <th class="p-4 border">ID</th>
                <th class="p-4 border">Image</th>
                <th class="p-4 border">Title</th>
                <th class="p-4 border">Short Description</th>
                <th class="p-4 border">Amount</th>
                <th class="p-4 border">Date</th>
                <th class="p-4 border">Genre</th>
                <th class="p-4 border">Venue</th>
                <th class="p-4 border">Created At</th>
                <th class="p-4 border">Updated At</th>
                <th class="p-4 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td class="p-4 border">{{$event->id }}</td>
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
                <td class="p-4 border">
                    <div class="flex flex-row justify-around gap-8">
                        <x-nav-link href="{{ route('edit-event', $event->id) }}">Edit</x-nav-link>
                        <x-secondary-button wire:click="delete_record({{ $event->id }})">Delete</x-secondary-button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>