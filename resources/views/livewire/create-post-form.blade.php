<div>
    <form wire:submit.prevent="createPost" class="flex flex-col" enctype="multipart/form-data">
        <label class="form-control w-full text-sm">
            <textarea wire:model="caption" class="textarea textarea-bordered w-full focus:outline-none text-sm" placeholder="Caption"></textarea>
            <div class="label">
                @error('caption')
                    <span class="label-text-alt text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </label>

        <div
            class="aspect-video bg-neutral-950 relative flex border border-neutral justify-center items-center rounded-lg w-full">
            @if ($media)
                <div class="aspect-video" id="photo-parent">
                    <img src="{{ $media->temporaryUrl() }}" alt="Preview" class="aspect-video object-contain">
                    <button wire:click.prevent="removeMedia" class="btn btn-sm btn-circle absolute right-3 top-3">
                        <img src="{{ asset('svg/delete.svg') }}" class="w-4" alt="">
                    </button>
                </div>
            @else
                <div id="add-photo-btn" class="flex flex-col justify-center items-center gap-3">
                    <img src="{{ asset('svg/photo.svg') }}" class="w-20" alt="">
                    <input type="file" id="photo-input" accept="image/*" wire:model="media" class="hidden">
                    <h1 class="text-neutral-300 text-sm">
                        Feel free to include a photo if you'd like.
                    </h1>
                    <button type="button" class="btn btn-sm" onclick="openPostInput()">
                        <span wire:loading wire:target="media" class="loading loading-spinner"></span>
                        Choose photo...

                    </button>
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary ms-auto me-0 mt-3 btn-sm px-6">
            Post
        </button>
    </form>
</div>
