<x-layout>
    <div class="container mt-5 pt-5 pb-5 bg-image">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="h1-viste">{{__('ui.create')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5 vh-100">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 p-5 bg-secondary rounded-5 text-white">
                <livewire:create-announcement/>
            </div>
        </div>
    </div>
</x-layout>