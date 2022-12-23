<div class="p-8">
    <form method="post" wire:submit.prevent="update_form({{ $event->id }})" class="w-full flex flex-col"
        enctype="multipart/form-data">
        <p class="text-xl">Edit Event</p>

        <div class="flex flex-row">
            <div class="m-3">
                <label>Event Title</label>
                <div>
                    <x-text-input wire:model.defer="event.title" required class="border border-gray-900 p-2"
                        placeholder="Enter Event Name" />
                </div>
                @error('event.title') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="m-3">
                <label>Genre Name</label><br>
                <select wire:model.defer="event.genre_id">
                    @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
                @error('event.genre_id') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="m-3">
                <label>Venue</label><br>
                <select wire:model.defer="event.venue_id">
                    @foreach ($venues as $venue)
                    <option value="{{ $venue->id }}">{{ $venue->name }}</option>
                    @endforeach
                </select>
                @error('event.venue_id') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="m-3">
                <label>Amount</label>
                <div>
                    <x-text-input wire:model.defer="event.amount" type="number" required
                        class="border border-gray-900 p-2" placeholder="Enter Amount" />
                </div>
                @error('event.amount') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="m-3">
                <label>Date</label>
                <div>
                    <x-text-input wire:model.defer="event.date" type="date" required class="border border-gray-900 p-2"
                        placeholder="Enter Date" />
                </div>
                @error('event.date') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="flex flex-col">
            <div class="m-3">
                <label>Short Description</label>
                <div>
                    <textarea wire:model.defer="event.short_description" cols="30" rows="5"></textarea>
                </div>
                @error('event.short_description') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="m-3">
                @if($event->image)
                <div>
                    <label>Existing Image</label>
                    <img src="{{ url('storage',$event->image) }}" width="200px" height="200px">
                    <label>Replace Image</label>
                    <div>
                        <x-text-input wire:model.defer="replace_image" type="file" class="border border-gray-900 p-2" />
                    </div>
                </div>
                @else
                <div>
                    <label>Upload Image</label>
                    <div>
                        <x-text-input wire:model.defer="image" type="file" class="border border-gray-900 p-2" />
                    </div>
                </div>
                @endif
                @error('image') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="m-3">
            <x-primary-button type="submit">
                UPDATE
            </x-primary-button>
        </div>
    </form>
</div>