<x-layout>
    <div class="container mt-5 pt-5 bg-image">
       <div class="row">
           <div class="col-12 text-center">
               <h1 class="h1-viste">Esplora la categoria : {{$category->name}}</h1>
           </div>
       </div>
    </div>
    <div class="container">
       <div class="row">
            @forelse ($category->announcements as $announcement)
            <div class="col-12 col-lg-4 p-3">
                <div class="container-card watch transition-card">
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
            @empty

              <div class="container-fluid vh-100 justify-content-center align-content-center">
                <div class="row">
                    <div class="col-12">
                        <p class="h1">Non sono presenti annunci per questa categoria</p>
                        <p class="h2">Pubblicane uno:             <a href="{{route('announcement.create')}}" class="cta"><i class="fa-solid fa-paper-plane"></i>Pubblica</a></p>
                    </div>
                </div>
              </div>

            @endforelse
       </div>
    </div>
</x-layout>