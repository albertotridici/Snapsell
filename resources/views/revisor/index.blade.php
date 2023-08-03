<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="container-header-secondary bg-revisor">
                    <div class="content-header watch transition">
                        @if ($announcement_to_check)
                            <h1 class="title-header">Ecco l'annuncio da revisionare:<br> <strong>{{$announcement_to_check->title}}</strong></h1>
                        @else
                            <h1 class="title-header">Ecco l'annuncio da revisionare:<br> <strong>Non ci sono annunci</strong></h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($announcement_to_check)
        <x-cardShow :announcement="$announcement_to_check"></x-cardShow>
    @endif

    
    <div class="toast-container position-fixed bottom-0 start-0 p-3" data-bs-delay="10000">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
            {{-- <img src="..." class="rounded me-2" alt="..."> --}}
            <strong class="me-auto">Bootstrap</strong>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
            Hello, world! This is a toast message.
            </div>
            <div class="mt-2 pt-2 border-top">
                <a href="{{route('home')}}" class="btn btn-primary btn-sm">Take action</a>
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
            </div>
            @if ($ultimo)
                <form action="{{route('revisor.null_announcement', ['announcement' => $ultimo])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-revisor-reject" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Rifiuta" data-bs-custom-class="tooltip-revisor-reject"><i class="fa-solid fa-xmark"></i></button>
                </form>
            @endif
        </div>
    </div>
    
</x-layout>
