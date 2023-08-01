<x-layout>
  <div class="container mt-5 pt-5 bg-image">
      <div class="row">
          <div class="col-12 text-center">
              <h1 class="h1-viste">Esplora la categoria : {{$category->name}}</h1>
          </div>
      </div>
  </div>
  <div class="container py-5">
      <div class="row">
          @forelse ($category->announcements as $announcement)
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