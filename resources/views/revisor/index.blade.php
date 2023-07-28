<x-layout>
    <div class="container mt-5 pt-5 bg-image">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="h1-viste mb-5 pb-5">{{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}</h1>
            </div>
        </div>
    </div>
    @if($announcement_to_check)
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <h5 class="card-title">{{$announcement_to_check->title}}</h5>
                <p class="card-text">{{$announcement_to_check->description}}</p>
                <p class="card-text">{{$announcement_to_check->price}}</p>
                <p class="card-footer">Pubblicato il : {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="{{route('revisor.accept_announcement', ['announcement' => $announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form>
            </div>
            <div class="col-6">
                <form action="{{route('revisor.reject_announcement', ['announcement' => $announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                </form>
            </div>
        </div>
    </div>
    @endif
</x-layout>