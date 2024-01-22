<div  x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)">
    @if (session('success'))
        <div role="alert" id="success-alert" class="alert alert-success flex text-center w-fit py-2 px-3">
            <span class="text-sm">{{ session('success') }}</span>
        </div>
    @elseif (session('failed'))
        <div role="alert" id="failed-alert" class="alert alert-success flex text-center w-fit">
            <span>{{ session('failed') }}</span>
        </div>
    @endif
</div>
