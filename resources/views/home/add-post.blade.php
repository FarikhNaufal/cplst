<dialog id="add_post_modal" class="modal z-50">
    <div class="modal-box py-5 px-7 bg-base-300">
        <div class="flex justify-between items-center">
            <h2 class="text-neutral-300 font-semibold text-xl">
                Create Post
            </h2>

            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost">✕</button>
            </form>
        </div>

        <div class="mt-5">
            @livewire('create-post-form')

        </div>
    </div>

    @push('scripts')
        <script>
            function openPostInput() {
                document.getElementById('photo-input').click();
            }
        </script>
    @endpush
</dialog>
