<x-layout>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 p-0">
        <div class="swiper swiperHeader">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="/img/vestitiHeader2.jpg">
            </div>
            <div class="swiper-slide">
                <img src="/img/motoriHeader.jpg">
            </div>
            <div class="swiper-slide">
                <img src="/img/musica.jpg">
            </div>
            <div class="swiper-slide">
                <img src="/img/elettronicaHeader3.jpg">
            </div>
            <div class="swiper-slide">
                <img src="/img/sportHeader2.jpg">
            </div>
            <div class="swiper-slide">
                <img src="/img/giochiHeader2.jpg">
            </div>
          </div>
        </div>
        <div class="container-header">
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
      </div>
    </div>
  </div>
  {{-- Start ultimi sei annunci ----------------------------------------------------------------------------------------- --}}
  <div class="container py-5 bg-image">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="display-5 sottotitoli">{{__('ui.allAnnouncement')}}</h2>
      </div>
    </div>
  </div>
  <div class="container py-5">
    <div class="row">
      @foreach ($announcements as $announcement)
        <div class="col-12 col-md-6 col-xl-4 p-3 watch transition-card">
          <x-card :announcement="$announcement"></x-card>
        </div>
      @endforeach
    </div>
  </div>
  {{-- End ultimi sei annunci ------------------------------------------------------------------------------------------- --}}
</x-layout>