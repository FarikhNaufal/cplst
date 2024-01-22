<div class="navbar bg-base-100">
    <div class="navbar-start flex gap-2">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-44">
                <li class="mb-4">
                    @auth()
                        <div class="profile-box border mt-auto border-neutral-600 p-3 flex gap-3 items-center rounded">
                            <div class="avatar">
                                <div class="w-6 mask mask-squircle">
                                    <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                </div>
                            </div>

                            <div class="flex flex-col text-xs">
                                <h5 class="text-neutral-300 truncate">
                                    {{ auth()->user()->username }}
                                </h5>

                                <h5 class="text-neutral-500">
                                    #{{ auth()->user()->id }}
                                </h5>
                            </div>

                            <button onclick="logout_modal.showModal()" class="ms-auto me-0">
                                <img src="{{ asset('svg/logout.svg') }}" class="w-5" alt="">
                            </button>
                            @include('auth.logout')
                        </div>
                    @endauth

                    @guest()
                        <div class="profile-box border mt-auto border-neutral-600 p-3 flex gap-3 items-center rounded">
                            <div class="avatar">
                                <div class="w-6 mask mask-squircle">
                                    <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                </div>
                            </div>

                            <div class="flex flex-col text-xs">
                                <h5 class="text-neutral-300 truncate">
                                    Guest
                                </h5>

                                <h5 class="text-neutral-500">
                                    #0000
                                </h5>
                            </div>

                        </div>
                    @endguest
                </li>

                <li>
                    <a
                        class="flex gap-3 py-2 px-3 bg-white bg-opacity-10 rounded font-semibold text-neutral-300 cursor-pointer text-xs">
                        Home</a>
                </li>
                <li>
                    <a
                        class="flex gap-3 py-2 px-3 hover:bg-white hover:bg-opacity-10 rounded font-semibold text-neutral-300 cursor-pointer text-xs">
                        Top</a>
                </li>
                <li>
                    <a
                        class="flex gap-3 py-2 px-3 hover:bg-white hover:bg-opacity-10 rounded font-semibold text-neutral-300 cursor-pointer text-xs">
                        Trending</a>
                </li>
                <li>
                    <a
                        class="flex gap-3 py-2 px-3 hover:bg-white hover:bg-opacity-10 rounded font-semibold text-neutral-300 cursor-pointer text-xs">
                        Top</a>
                </li>


                <li class="my-3 self-center">
                    @auth
                        <button onclick="add_post_modal.showModal()" class="btn btn-primary w-fit btn-xs text-xs font-semibold">
                            Post Now
                        </button>
                        @include('home.add-post')

                    @endauth
                    @guest
                        <button onclick="signup_modal.showModal()" class="btn btn-primary w-fit btn-xs text-xs font-semibold">
                            Login / Sign up
                        </button>
                        @include('auth.signup')

                    @endguest
                </li>

            </ul>
        </div>

        <h2
            class="text-lg font-bold text-center bg-gradient-to-r from-blue-500 to-primary text-transparent bg-clip-text">
            Cuplislite
        </h2>
    </div>

    <div class="navbar-end">
        <button class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
        <button class="btn btn-ghost btn-circle">
            <div class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <span class="badge badge-xs badge-primary indicator-item"></span>
            </div>
        </button>
    </div>
</div>
