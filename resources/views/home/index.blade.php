@extends('app')


@section('contents')
    <div class="z-50 fixed flex self-center">
        @include('alerts.alerts')
    </div>
    @livewire('post-view')



    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('post-link-copied', (postUrl) => {
                navigator.clipboard.writeText(postUrl[0]);
            });
        });
    </script>
    @endpush
@endsection
