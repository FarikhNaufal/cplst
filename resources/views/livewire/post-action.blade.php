<div x-data="{ showComments: false }">
    <div class="flex gap-3 md:gap-6 items-center text-neutral-300 font-semibold text-sm md:px-2">
        <div class="flex gap-2 items-center">

            <button wire:click="likeButton">

                @if ($userHasLiked)
                    <img src="{{ asset('svg/loved.svg') }}" class="w-[1.35rem] swap-off" alt="liked button">
                @else
                    <img src="{{ asset('svg/love.svg') }}" class="w-5 swap-on" alt="like button">
                @endif
            </button>

            <h5>
                {{ $likes }}
            </h5>
        </div>

        <button @click="showComments = !showComments" class="flex gap-2 items-center" x-transition:leave.opacity.40>
            <img src="{{ asset('svg/comments.svg') }}" class="w-5" alt="">

            <h5 class="flex gap-1">
                {{ $comments->count() }}
                <span class="hidden md:block">
                    Comments
                </span>
            </h5>
        </button>



        </h5>
        <div x-data="{ isCopied: false }" class="ms-auto me-0">
            <button wire:click="shareButton" x-on:click="isCopied = !isCopied; setTimeout(() => { isCopied = !isCopied; }, 2000)"
                class="flex gap-1  items-center" x-bind:class="{ 'text-neutral-500': isCopied }">
                <img src="{{ asset('svg/share.svg') }}" class="w-7" alt="">
                <h5 x-text="isCopied ? 'Copied' : 'Share'" class="">
                </h5>
            </button>
        </div>



    </div>
    <div x-show="showComments" x-cloak x-transition:enter="transition ease-in"
        x-transition:enter-start="opacity-0 scale-100">
        <form wire:submit="storeComment" class="flex flex-col mt-5">

            <label class="form-control w-full text-sm">
                <textarea wire:model="content" class="textarea textarea-bordered w-full focus:outline-none text-sm"
                    placeholder="Leave a comment..." rows="2"></textarea>
                <div class="label">
                    @error('caption')
                        <span class="label-text-alt text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </label>

            <div class="flex gap-2 self-end">
                <button type="button" @click="showComments = false" x-transition class="btn btn-sm w-fit text-xs">
                    Cancel
                </button>
                <button type="submit" class="btn btn-success btn-sm w-fit text-xs">
                    Send
                    <span wire:loading wire:target="storeComment" class="loading loading-spinner"></span>
                </button>
            </div>
        </form>

        <div class="flex flex-col gap-5 max-h-72 overflow-y-scroll mt-5 no-scrollbar">
            @foreach ($comments as $comment)
                <div class="flex gap-3 items-start">
                    <div class="avatar">
                        <div class="w-6 mask mask-squircle">
                            <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>

                    <div class="flex flex-col text-xs  gap-1">
                        <h3 class="text-neutral-300 font-bold flex gap-3">
                            {{ $comment->user->username }}
                            <span class="text-neutral-400 font-normal">
                                {{ $comment->created_at->diffForHumans() }}
                            </span>
                        </h3>

                        <h5 class="text-neutral-300">
                            {{ $comment->content }}
                        </h5>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
