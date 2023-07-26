<x-layout>
 <div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Ultimi annunci</h1>
        </div>
    </div>
 </div>
 <div class="container">
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