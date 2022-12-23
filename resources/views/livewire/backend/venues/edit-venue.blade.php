<div class="p-8">
    <form wire:submit.prevent="update_form({{ $venue->id }})" class="w-full flex flex-col">
        <p class="text-xl">Edit Venue</p>
        <div class="m-3">
            <label>Venue Name</label>
            <div>
                <x-text-input wire:model.defer="venue.name" required class="border border-gray-900 p-2"
                    placeholder="Enter Venue Name" />
            </div>
        </div>
        <div class="m-3">
            <label>Venue Address</label>
            <div>
                <textarea wire:model.defer="venue.address" cols="30" rows="5"></textarea>
            </div>
        </div>
        <div class="m-3">
            <label>Contact Number</label>
            <div>
                <x-text-input wire:model.defer="venue.contact_number" type="tel" required
                    class="border border-gray-900 p-2" placeholder="Contact Number" />
            </div>
        </div>
        <div class="m-3">
            <x-primary-button type="submit">
                Update
            </x-primary-button>
        </div>
    </form>
</div>