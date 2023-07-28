<x-layout>
  {{-- <div class="container-fluid bg-image">
    <div class="row vh-100">
      <div class="col-12 text-center d-flex flex-column justify-content-center align-items-center">
        <h1 class="h1-home">SnapSell</h1>
        <h2 class="h2-home">Trade, Click, Smile </h2>
      </div>
    </div>
  </div> --}}
  
  <div class="container-fluid bg-image">
    <div class="row vh-100 mb-5">
      <div class="col-12 p-0">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            
            <div class="swiper-slide img-custom1 d-flex flex-column justify-content-center ">
              <h1 class="h1-home watch transition">SnapSell</h1>
              <h2 class="h2-home mb-5 watch transition">Trade, Click, Smile </h2>
              <a href="{{route('announcement.create')}}" class="watch transition btn btn-primary">Inizia a vendere!</a>
            </div>
            
            <div class="swiper-slide img-custom2 d-flex flex-column justify-content-center">
              <h1 class="h1-home">SnapSell</h1>
              <h2 class="h2-home mb-5">Consulta gli ultimi articoli pubblicati in Sport!</h2>
              <button>Vai alla categoria.</button>
            </div>
            
            <div class="swiper-slide img-custom3 d-flex flex-column justify-content-center">
              <h1 class="h1-home">SnapSell</h1>
              <h2 class="h2-home-mus mb-5">Dai sfogo all'artista che è in te!</h2>
              <button>Vai alla categoria.</button>
            </div>
            
            <div class="swiper-slide img-custom4 d-flex flex-column justify-content-center">
              <h1 class="h1-home">SnapSell</h1>
              <h2 class="h2-home mb-5">Entra a far parte del team!</h2>
              <a class="btn btn-primary" href="{{route('become.revisor')}}">Invia candidatura</a >
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>

  {{-- Start ultimi sei annunci ----------------------------------------------------------------------------------------- --}}
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="display-5">Articoli in tendenza</h2>
      </div>
    </div>
  </div>
  <div class="container py-5">
    <div class="row">
      @foreach ($announcements as $announcement)
      <div class="col-4 p-3 watch">
        <div class="container-card">
          <div class="img">
            <img src="https://digitshack.com/codepen/mentor13/image-product-desktop.jpg" alt="foto card">
          </div>
          <div class="card-content">
            <div class="pro-cat-content">
              <div class="link-category-content">
                <a href="{{route('category.show', $announcement->category)}}" class="pro-cat">{{$announcement->category->name}}</a>
                <div class="evidenziatore"></div>
              </div>
              <h6 class="pro-cat">{{$announcement->created_at->format('d/m/Y')}}</h6>
            </div>
            <h2 class="pro-name">{{$announcement->title}}</h2>
            <p class="pro-des">{{$announcement->descSubstr()}}</p>
            <div class="price">
              <p class="current-price">€ {{$announcement->price}}</p>
            </div>
            <a href="{{route('announcement.show',compact('announcement'))}}" class="cta"><i class="fa-solid fa-paper-plane"></i>Scopri di più</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  {{-- End ultimi sei annunci ------------------------------------------------------------------------------------------- --}}
</x-layout>
