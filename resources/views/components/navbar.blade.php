<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Snap Sell</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('announcement.index')}}">Tutti gli Annunci</a>
                </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Categorie
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item" href="{{route('category.show',compact('category'))}}">{{$category->name}}</a></li>
                                <li><hr class="dropdown-divider"></li>
                            @endforeach
                        </ul>
                    </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Accedi</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('announcement.create')}}">Crea Annuncio</a></li>
                            <li><hr class="dropdown-divider"></li>

                            <li><a class="dropdown-item" role="button"
                            onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Log Out</a></li>
                            <form method="POST" action="{{route('logout')}}" id="form-logout" class="d-none">@csrf</form>
                        </ul>
                    </li>
                @endguest
                
            </ul>
        </div>
    </div>
</nav>