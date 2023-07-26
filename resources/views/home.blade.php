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

                  <div class="swiper-slide img-custom1 d-flex flex-column justify-content-center">
                    <h1 class="h1-home">SnapSell</h1>
                    <h2 class="h2-home mb-5">Trade, Click, Smile </h2>
                    <button>Inizia a vendere!</button>
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
                    <h2 class="h2-home-mus mb-5">Dai sfogo all'artista che è in te!</h2>
                    <button>Vai alla categoria.</button>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
        </div>
    </div>
 </div>

 <div class="container-fluid">
    <div class="row">
            @foreach ($announcements as $announcement)
                <div class="col-4">
                    <div class="card shadow">
                        <img src="https://picsum.photos/250" class="card-img-top" alt="foto">
                        <div class="card-body">
                          <h5 class="card-title">{{$announcement->title}}</h5>
                          <p class="card-text">{{$announcement->description}}</p>
                          <p class="card-text">{{$announcement->price}}</p>
                          <a href="{{route('announcement.show',compact('announcement'))}}" class="btn btn-primary shadow">Visualizza</a>
                          <a href="{{route('category.show', $announcement->category)}}" class="btn my-2 border-top pt-2 border-dark card-link shadow btn-success">Categoria : {{$announcement->category->name}}</a>
                          <p class="card-footer">Pubblicato il : {{$announcement->created_at->format('d/m/Y')}}</p>
                        </div>
                      </div>
                </div>
            @endforeach
    </div>
 </div>
</x-layout>