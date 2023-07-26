<x-layout>
    <div class="bg-custom-rl">
        <div class="container container-custom">
            <div class="row h-100">
                <div class="col-6 signin-signup signin">
                    <form method="POST" action="{{route('login')}}" class="form">
                        @csrf
                        <h2 class="title">Accedi</h2>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="text" name="email" placeholder="Email">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn-rl">Accedi</button>
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
                <div class="panels-container panels-l col-6">
                    <div class="panel">
                        <div class="text-white">
                            <h3>Non sei registrato?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima iure?</p>
                            <a href="{{route('register')}}" class="btn-rl">Registrati</a>
                        </div>
                        <img src="./media/register2.svg" alt="" class="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>