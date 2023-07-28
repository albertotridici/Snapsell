<nav id="navbar" class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <img src="/img/logo3.png" class="custom" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item color-custom">
                    <a class="color-custom nav-link active px-4" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active color-custom px-4" aria-current="page" href="{{route('announcement.index')}}">Tutti gli Annunci</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle color-custom px-4" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{route('category.show',compact('category'))}}">{{$category->name}}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
            @guest
                <div class="nav-item px-4">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </div>
                <div class="nav-item px-4">
                    <a class="nav-link" href="{{route('login')}}">Accedi</a>
                </div>
            @else                
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenuto {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('announcement.create')}}">Crea Annuncio</a></li>
                        @if (Auth::user()->is_revisor)
                            <li>
                                <a class="dropdown-item btn btn-outline-success btn-sm position-relative" aria-current="page" href="{{route('revisor.index')}}">
                                Zona Revisore
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        {{App\Models\Announcement::toBeRevisionedCount()}}
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </a>
                            </li>
                        @endif

                        <li><hr class="dropdown-divider"></li>
                        
                        <li><a class="dropdown-item" role="button"
                            onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Log Out</a></li>
                        <form method="POST" action="{{route('logout')}}" id="form-logout" class="d-none">@csrf</form>
                    </ul>
                </div>
            @endguest
            <form action="{{route('announcements.search')}}" method="GET" class="d-flex">
                @csrf
                <input name="searched" class="form-control me-2" placeholder="search" aria-label="search" type="search">
                <button class="btn btn-success" type="submit" >Cerca</button>
            </form>
        </div>
    </div>
</nav>