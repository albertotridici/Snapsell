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
</x-layout>