<div class="p-8">
    <x-nav-link href="{{ route('create-artist') }}">
        Create Artist
    </x-nav-link>
    <table class="w-full mt-5">
        <thead>
            <tr>
                <th class="p-4 border">ID</th>
                <th class="p-4 border">Name</th>
                <th class="p-4 border">Created At</th>
                <th class="p-4 border">Updated At</th>
                <th class="p-4 border">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artists as $artist)
            <tr>
                <td class="p-4 border">{{ $artist->id }}</td>
                <td class="p-4 border">{{ $artist->name }}</td>
                <td class="p-4 border">{{ $artist->created_at }}</td>
                <td class="p-4 border">{{ $artist->updated_at }}</td>
                <td class="p-4 border">
                    <div class="flex flex-row justify-around gap-8">
                        <x-nav-link href="{{ route('edit-artist', $artist->id) }}">Edit</x-nav-link>
                        <x-secondary-button wire:click="delete_record({{ $artist->id }})">Delete</x-secondary-button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>