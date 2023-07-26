<x-layout>
    <div class="container">
       <div class="row">
           <div class="col-12 text-center">
               <h1>Annuncio {{$announcement->title}} </h1>
           </div>
       </div>
    </div>
    <div class="container">
       <div class="row">
            <div class="col-12">
                    <div id="showCarousel" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img class="img-fluid p-3 rounded" src="https://picsum.photos/id/27/1200/200" alt="foto">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid p-3 rounded" src="https://picsum.photos/id/28/1200/200" alt="foto">
                            </div> 
                            <div class="carousel-item">
                                <img class="img-fluid p-3 rounded" src="https://picsum.photos/id/29/1200/200" alt="foto">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">next</span>
                        </button>
                    </div>
                    <h5 class="card-title">{{$announcement->title}}</h5>
                    <p class="card-text">{{$announcement->description}}</p>
                    <p class="card-text">{{$announcement->price}}</p>
                    <a href="#" class="btn btn-primary shadow">Visualizza</a>
                    <a href="#" class="btn my-2 border-top pt-2 border-dark card-link shadow btn-success">Categoria : {{$announcement->category->name}}</a>
                    <p class="card-footer">Pubblicato il : {{$announcement->created_at->format('d/m/Y')}}</p>
            </div>
               {{-- @foreach ($announcements as $announcement)
                   <div class="col-4">
                       <div class="card shadow">
                           <img src="https://picsum.photos/250" class="card-img-top" alt="foto">
                           <div class="card-body">
                             <h5 class="card-title">{{$announcement->title}}</h5>
                             <p class="card-text">{{$announcement->description}}</p>
                             <p class="card-text">{{$announcement->price}}</p>
                             <a href="#" class="btn btn-primary shadow">Visualizza</a>
                             <a href="#" class="btn my-2 border-top pt-2 border-dark card-link shadow btn-success">Categoria : {{$announcement->category->name}}</a>
                             <p class="card-footer">Pubblicato il : {{$announcement->created_at->format('d/m/Y')}}</p>
                           </div>
                         </div>
                   </div>
               @endforeach --}}
       </div>
    </div>
   </x-layout>