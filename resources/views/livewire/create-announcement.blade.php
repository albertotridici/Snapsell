<div>
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
        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <select id="category" class="form-control" wire:model.defer="category">
                <option value="">Scegli la categoria</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if (session()->has('message'))
        <script>
                let messageModal = new bootstrap.Modal(document.querySelector('#alertSuccess'));
                messageModal.show();
                
                messageModal._element.addEventListener('hide.bs.modal', function() {
                    location.reload();
                });
        </script>
    @endif
    <x-alertSuccess></x-alertSuccess>
</div>

