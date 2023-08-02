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
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" wire:model.lazy="description">
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </textarea>
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
        <div class="mb-3">
            <input wire:model="temporary_images" type="file" name="images" multiple class="form-control @error('temporary_images.*') is-invalid @enderror">
            @error('temporary_images.*')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>foto preview:</p>
                    <div class="row border-4 border border-info rounded py-4">
                        @foreach ($images as $key => $image)
                            <div class="col my-3">
                                <div class="mx-auto rounded img-preview" style="background-image: url({{$image->temporaryUrl()}});">
                               </div>
                                <div class="mx-auto rounded" style="height:500px; width:500px; background-image: url({{$image->temporaryUrl()}});"></div>
                               <button type="button" class="btn btn-danger d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">
                            Cancella</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif



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

