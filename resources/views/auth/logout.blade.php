<dialog id="logout_modal" class="modal">
    <div class="modal-box bg-base-300 p-6 flex flex-col">
        <h2 class="text-xl font-bold text-neutral-300">
            Logout
        </h2>
        <p class="text-sm text-neutral-400 my-3 ">
            Do you really want to leave this page ? Maybe there is still some interessting content to watch.
        </p>

        <div class="flex mt-10 ms-auto me-0">
            @livewire('logout-form')
        </div>
    </div>

</dialog>
@push('scripts')
<script>
    Livewire.on('logout_form', () => {
        logout_modal.close();
    });
</script>
@endpush
