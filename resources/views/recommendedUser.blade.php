<div class="h-max flex flex-col mt-5 w-64 bg-neutral-900 p-4">
    <h2 class="text-white text-lg font-semibold mb-4">Recommended Users</h2>

    <div class="flex flex-col gap-3 max-h-72">
        @for ($i = 0; $i < 5; $i++)
            <div class="flex gap-4 items-center">
                <div class="avatar">
                    <div class="w-9 mask mask-squircle">
                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>

                <div class="flex flex-col text-sm">
                    <h5 class="text-neutral-300">
                        farikhnaufal
                    </h5>

                    <h5 class="text-neutral-500">
                        #1
                    </h5>
                </div>

                <div class="ms-auto me-0">
                    <button class="btn btn-xs btn-outline btn-secondary">
                        Follow
                    </button>
                </div>
            </div>
        @endfor
    </div>


    <div class="border border-neutral-300 rounded-xl flex items-center justify-center h-52 mt-20">
        <h2 class="text-neutral-300 font-semibold text-2xl text-center">
            Space Iklan
            Hubungi 081358620667

        </h2>
    </div>
</div>
