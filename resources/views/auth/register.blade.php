<x-layout>
    <div class="container-fluid p-3 bg-info text-white">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-1">Registrati</h1>
            </div>
        </div>
    </div>
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-6 bg-secondary text-white p-5 rounded-5">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Utente</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Utente</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>