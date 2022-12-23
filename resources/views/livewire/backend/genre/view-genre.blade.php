<div class="p-8">
    <x-nav-link href="{{ route('create-genre') }}">
        Create Genre
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
            @foreach ($genres as $genre)
            <tr>
                <td class="p-4 border">{{ $genre->id }}</td>
                <td class="p-4 border">{{ $genre->name }}</td>
                <td class="p-4 border">{{ $genre->created_at }}</td>
                <td class="p-4 border">{{ $genre->updated_at }}</td>
                <td class="p-4 border">
                    <div class="flex flex-row justify-around gap-8">
                        <x-nav-link href="{{ route('edit-genre', $genre->id) }}">Edit</x-nav-link>
                        <x-secondary-button wire:click="delete_record({{ $genre->id }})">Delete</x-secondary-button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>