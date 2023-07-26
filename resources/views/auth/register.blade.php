<x-layout>
    <div class="bg-custom-rl">
        <div class="container container-custom">
            <div class="row h-100">
                <div class="panels-container panels-r col-6">
                    <div class="panel">
                        <div class="text-white">
                            <h3>Hai già un accaunt?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima iure?</p>
                            <a href="{{route('login')}}" class="btn-rl">Accedi</a>
                        </div>
                        <img src="./media/login2.svg" alt="" class="image">
                    </div>
                </div>
                <div class="col-6 signin-signup signup">
                    <form method="POST" action="{{route('register')}}" class="form">
                        @csrf
                        <h2 class="title">Registrati</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="name" placeholder="Username">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="text" name="email" placeholder="Email">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-unlock"></i>
                            <input type="password" name="password_confirmation" placeholder="Confirm password">
                        </div>
                        <button type="submit" class="btn-rl">Registrati</button>
                        <p class="social-text">Or Sign in with social platform</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>