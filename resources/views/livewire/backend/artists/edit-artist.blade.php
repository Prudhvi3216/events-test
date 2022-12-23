<div class="p-8">
    <form wire:submit.prevent="update_form({{ $artist->id }})" class="w-full flex flex-col">
        <p class="text-xl">Edit Artist</p>
        <div class="m-3">
            <label>Artist Name</label>
            <div>
                <x-text-input wire:model.defer="artist.name" required class="border border-gray-900 p-2"
                    placeholder="Enter Artist Name" />
            </div>
        </div>
        <div class="m-3">
            <x-primary-button type="submit">
                Update
            </x-primary-button>
        </div>
    </form>
</div>