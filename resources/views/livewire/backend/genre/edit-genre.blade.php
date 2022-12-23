<div class="p-8">
    <form wire:submit.prevent="update_form({{ $genre->id }})" class="w-full flex flex-col">
        <p class="text-xl">Edit Genre</p>
        <div class="m-3">
            <label>Genre Name</label>
            <div>
                <x-text-input wire:model.defer="genre.name" required class="border border-gray-900 p-2" />
            </div>
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="m-3">
            <x-primary-button type="submit">
                Update
            </x-primary-button>
        </div>
    </form>
</div>