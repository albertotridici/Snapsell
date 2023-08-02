<x-layout>
  {{-- <div class="container mt-5 pt-5 bg-image">
      <div class="row">
          <div class="col-12 text-center">
              <h1 class="h1-viste">Esplora la categoria : {{$category->name}}</h1>
          </div>
      </div>
  </div> --}}
  <div class="container-header vh-100 position-relative">
    <div class="content-header watch transition">
      <h1 class="title-header">Trade, Click, Smile: <br> <strong>Acquista ora e risparmia!</strong></h1>
      <div class="content-addAds">
        <div class="col-12 col-lg-6">
          <p>Dai vita alle tue offerte: <br><strong>Pubblica il tuo annuncio ora!</strong></p>
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
  <div class="container py-5">
      <div class="row">
          @forelse ($category->announcements->where('is_accepted', true) as $announcement)
            <div class="col-12 col-md-6 col-xl-4 p-3">
              <x-card :announcement="$announcement"></x-card>
            </div>
          @empty
            <div class="container-fluid vh-100 justify-content-center align-content-center">
              <div class="row">
                  <div class="col-12">
                      <p class="h1">Non sono presenti annunci per questa categoria</p>
                      <p class="h2">Pubblicane uno: <a href="{{route('announcement.create')}}" class="cta"><i class="fa-solid fa-paper-plane"></i>Pubblica</a></p>
                  </div>
              </div>
            </div>
          @endforelse
      </div>
  </div>
</x-layout>