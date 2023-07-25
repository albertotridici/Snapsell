<div>
    @if (session()->has('message'))
        <span class="alert alert-succes">
            {{session('message')}}
        </span>
    @endif
    <form wire:submit.prevent="store">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo Annuncio</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.lazy="title">
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" wire:model.lazy="description">
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" wire:model.lazy="price">
            @error('price')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
