<aside class="md:w-60 lg:w-[17rem]">
    <div class="p-4 flex flex-col h-full">
        <div class="py-2 mb-6">
            <h2
                class="text-3xl font-bold text-center bg-gradient-to-r from-blue-500 to-primary text-transparent bg-clip-text">
                Cuplislite Uhu
            </h2>
        </div>

        @guest()
            <div class="signup-box border-neutral-600 border rounded-lg p-4 flex flex-col justify-center items-center gap-2">
                <h2 class="text-neutral-300 text-xl font-bold">
                    New To CPLST ?
                </h2>

                <h5 class="text-neutral-300 text-center">
                    Sign up now to see more content!
                </h5>

                <button onclick="signup_modal.showModal()" class="btn btn-primary  w-fit px-10 btn-sm font-semibold">
                    Login / Sign up
                </button>
            </div>
            @include('auth.signup')
        @endguest

        @auth
            <div class="signup-box border-neutral-600 border rounded-lg p-4 flex flex-col justify-center items-center gap-2">
                <h2 class="text-neutral-300 text-xl font-bold">
                    Post something
                </h2>

                <h5 class="text-neutral-400 text-center text-sm">
                    Express and share your ideas with the world.
                </h5>

                <button onclick="add_post_modal.showModal()" class="btn btn-primary w-fit px-10 mt-3 btn-sm font-semibold">
                    Post Now
                </button>
            </div>
            @include('home.add-post')
        @endauth

        <div class="menu-box mt-4">
            <ul class="flex flex-col text-sm font-semibold">
                <li class="flex gap-3 py-2 px-3 bg-white bg-opacity-10 rounded text-neutral-300 cursor-pointer">
                    <img src="{{ asset('svg/home.svg') }}" class="w-5" alt="">
                    <h5>
                        Home
                    </h5>
                </li>
                <li
                    class="flex gap-3 py-2 px-3 hover:bg-white hover:bg-opacity-10 rounded text-neutral-300 cursor-pointer">
                    <img src="{{ asset('svg/top.svg') }}" class="w-5" alt="">
                    <h5>
                        Top
                    </h5>
                </li>
                <li
                    class="flex gap-3 py-2 px-3 hover:bg-white hover:bg-opacity-10 rounded text-neutral-300 cursor-pointer">
                    <img src="{{ asset('svg/trending.svg') }}" class="w-5" alt="">
                    <h5>
                        Trending
                    </h5>
                </li>
                <li
                    class="flex gap-3 py-2 px-3 hover:bg-white hover:bg-opacity-10 rounded text-neutral-300 cursor-pointer">
                    <img src="{{ asset('svg/latest.svg') }}" class="w-5" alt="">
                    <h5>
                        Fresh
                    </h5>
                </li>

            </ul>
        </div>



        @auth()
            <div class="profile-box border mt-auto border-neutral-600 p-3 flex gap-3 items-center rounded">
                <div class="avatar">
                    <div class="w-10 mask mask-squircle">
                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>

                <div class="flex flex-col text-sm">
                    <h5 class="text-neutral-300">
                        {{ auth()->user()->username }}
                    </h5>

                    <h5 class="text-neutral-500 text-xs">
                        #{{ auth()->user()->id }}
                    </h5>
                </div>

                <button onclick="logout_modal.showModal()" class="ms-auto me-0">
                    <img src="{{ asset('svg/logout.svg') }}" class="w-5" alt="">
                </button>
            </div>
            @include('auth.logout')

        @endauth

        @guest
            <div class="profile-box border mt-auto border-neutral-600 p-3 flex gap-3 items-center rounded">
                <div class="avatar">
                    <div class="w-10 mask mask-squircle">
                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>

                <div class="flex flex-col text-sm">
                    <h5 class="text-neutral-300">
                        Guest Account
                    </h5>

                    <h5 class="text-neutral-500 text-xs">
                        #0000
                    </h5>
                </div>
            </div>
        @endguest
    </div>
</aside>
