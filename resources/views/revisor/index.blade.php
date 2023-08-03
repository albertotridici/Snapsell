<x-layout>
    <div class="container mt-5 pt-5 bg-image">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="h1-viste mb-5 pb-5">{{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}</h1>
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
            <form action="{{route('revisor.null_announcement', ['announcement' => $ultimo])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-revisor-reject" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Rifiuta" data-bs-custom-class="tooltip-revisor-reject"><i class="fa-solid fa-xmark"></i></button>
            </form>
        </div>
    </div>
    
</x-layout>
