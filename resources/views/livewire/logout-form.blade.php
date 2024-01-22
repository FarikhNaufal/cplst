<div>
    <div class="flex gap-3">
        <button onclick="logout_modal.close()" class="btn btn-outline btn-sm">
            Not now
        </button>

        <button wire:click="logout" class="btn btn-error btn-sm">
            Logout
            <span wire:loading class="loading loading-spinner"></span>

        </button>
    </div>
</div>
