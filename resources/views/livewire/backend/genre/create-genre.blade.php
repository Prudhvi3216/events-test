<div class="p-8">
    <form wire:submit.prevent="save_form" class="w-full flex flex-col">
        <p class="text-xl">Create Genre</p>
        <div class="m-3">
            <label>Genre Name</label>
            <div>
                <x-text-input wire:model.defer="name" required class="border border-gray-900 p-2"
                    placeholder="Enter Genre Name" />
            </div>
        </div>
        <div class="m-3">
            <x-primary-button type="submit">
                SUBMIT
            </x-primary-button>
        </div>
    </form>
</div>