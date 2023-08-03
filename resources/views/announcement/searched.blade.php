<x-layout>
    @if (count($announcements))
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="container-header-secondary bg-search">
                        <div class="content-header watch transition">
                            <h1 class="title-header">Hai cercato: <br> <strong>{{$cercato}}</strong></h1>
                            <form action="{{route('announcements.search')}}" method="GET" class="form-searchbar mt-4">
                                @csrf
                                <div class="content-input-btn">
                                <div>
                                    <button class="btn btn-searchbar" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                                <div>
                                    <input name="searched" class="form-control" placeholder="Cerca nel sito..." aria-label="search" type="search">
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                @foreach ($announcements as $announcement)
                    <div class="col-12 col-md-6 col-xl-4 p-3">
                        <x-card :announcement="$announcement"></x-card>
                    </div>
                @endforeach
                {{$announcements->links()}}
            </div>
        </div>
    @else
        <div class="container-fluid">
            <div class="row">
            <div class="col-12 p-0">
                <div class="container-header-secondary bg-search">
                <div class="content-header watch transition">
                    <h1 class="title-header">Hai cercato: <br> <strong>{{$cercato}}</strong></h1>
                    <div class="content-addAds content-addAds-secondary">
                    <div class="col-12 col-lg-6">
                        <p class="description-category">Non ci sono annunci: <br><strong>Fatti notare, pubblicane uno!</strong></p>
                    </div>
                    <div class="col-12 col-lg-6 content-btn-header">
                        <a href="{{route('announcement.create')}}" class="cta-header"><i class="fa-solid fa-hand-holding-dollar"></i>Crea nuovo annuncio</a>
                    </div>
                    </div>
                    <form action="{{route('announcements.search')}}" method="GET" class="form-searchbar">
                    @csrf
                    <div class="content-input-btn">
                        <div>
                        <button class="btn btn-searchbar" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <div>
                        <input name="searched" class="form-control" placeholder="Cerca nel sito..." aria-label="search" type="search">
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    @endif
</x-layout>
{{-- <div class="container mt-5 pt-5 bg-image">
    <div class="row">
        <div class="col-12 text-center ">
            <h1 class="h1-viste">Tutti gli annunci</h1>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        @forelse ($announcements as $announcement)
            <div class="col-12 col-md-6 col-xl-4 p-3">
                <x-card :announcement="$announcement"></x-card>
            </div>
        @empty
        <div class="col-12">
            <div class="alert alert-warning py-3 shadow">
                <p class="lead" >Non ci sono annunci per questa ricerca prova a cambiare target.</p>
            </div>
        </div>
        @endforelse
        
    </div>
</div> --}}