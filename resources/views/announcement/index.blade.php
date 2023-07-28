<x-layout>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Tutti gli annunci</h1>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            @forelse ($announcements as $announcement)
                <div class="col-4 p-3 watch transition-card">
                    <x-card :announcement="$announcement"></x-card>
                </div>
            @empty
            <div class="col-12">
                <div class="alert alert-warning py-3 shadow">
                    <p class="lead" >Non ci sono annunci per questa ricerca prova a cambiare target.</p>
                </div>
            </div>
            @endforelse
            {{$announcements->links()}}
        </div>
    </div>
</x-layout>