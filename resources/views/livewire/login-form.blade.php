<div>
    <form wire:submit="login">
        <div class="flex flex-col my-5">
            <label class="form-control w-full text-sm">
                <input wire:model="email" type="email" id="emailInput-login" placeholder="Email"
                    class="input input-bordered w-full text-sm" />
                <div class="label">
                    @error('email')
                        <span class="label-text-alt text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </label>

            <label class="form-control w-full text-sm">
                <input wire:model="password" type="password" id="passwordInput-login" placeholder="Password"
                    class="input input-bordered w-full text-sm" />
                <div class="label">
                    @error('password')
                        <span class="label-text-alt text-red-500">{{ $message }}</span>
                    @enderror

                    @error('credentials')
                        <span class="label-text-alt text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </label>


        </div>

        <div class="flex flex-col gap-6">
            <button type="submit" class="btn btn-primary" id="loginButton">
                Login in
                <span wire:loading class="loading loading-spinner"></span>

            </button>
        </div>
    </form>
</div>
