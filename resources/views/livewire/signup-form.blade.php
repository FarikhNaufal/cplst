<div>
    <form wire:submit="store">

        <div class="flex flex-col my-5">

            <label class="form-control w-full text-sm">
                <input wire:model="username" type="text" id="usernameInput-signup" placeholder="Username"
                    class="input input-bordered w-full text-sm" />
                <div class="label">
                    @error('username')
                        <span class="label-text-alt text-red-500">{{$message}}</span>
                    @enderror
                </div>
            </label>

            <label class="form-control w-full text-sm">
                <input wire:model="email" type="email" id="emailInput-signup" placeholder="Email"
                class="input input-bordered w-full text-sm" />
                <div class="label">
                    @error('email')
                        <span class="label-text-alt text-red-500">{{$message}}</span>
                    @enderror
                </div>
            </label>

            <label class="form-control w-full text-sm">
                <input wire:model="password" type="password" id="passwordInput-signup" placeholder="Password"
                class="input input-bordered w-full text-sm" />
                <div class="label">
                    @error('password')
                        <span class="label-text-alt text-red-500">{{$message}}</span>
                    @enderror
                </div>
            </label>


        </div>

        <div class="flex flex-col gap-6">
            <button type="submit" class="btn btn-primary" id="signupButton">
                Sign up
            </button>

            <button onclick="handleModalSwitch()" class="text-neutral-300 text-center font-semibold text-sm">
                Already a member ? Log in
            </button>
        </div>
    </form>
</div>
