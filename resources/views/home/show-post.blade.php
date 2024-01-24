@extends('app')

@section('contents')
    <div>
        <div class="post-box flex flex-col gap-2 md:gap-3 border-b border-neutral-600 py-6 md:py-8">
            <div class="flex justify-between items-center">
                <div class="flex gap-2 items-center">
                    <div class="avatar">
                        <div class="w-6 mask mask-squircle">
                            <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>

                    <h5 class="text-sm font-semibold text-neutral-300">
                        {{ $post->user->username }}
                    </h5>

                    <h5 class="text-xs text-neutral-400">
                        {{ $post->created_at->diffForHumans() }}
                    </h5>
                </div>

                <img src="{{ asset('svg/menu.svg') }}" class="w-4" alt="">

            </div>

            <div class="flex flex-col gap-3">
                <span class="text-neutral-300 md:text-xl font-semibold whitespace-pre-line">{{ $post->caption }}</span>

                @if ($post->media)
                    <img loading="lazy" src="{{ Storage::url('public/users/' . $post->user_id . '/posts/' . $post->media) }}"
                        alt="{{ $post->media }}"
                        class="aspect-video object-contain bg-neutral-950 border-neutral-800 rounded border">
                @endif
            </div>

            <livewire:post-action :$post :key="$post->id" />
        </div>
    </div>
@endsection

