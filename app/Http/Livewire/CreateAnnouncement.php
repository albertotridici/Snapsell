<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAnnouncement extends Component
{ 
    use WithFileUploads;
    public $title;
    public $description;
    public $price;
    public $category;
    public $temporary_images;
    public $images = [];



    protected $rules = [
        'title'=>'required|min:5',
        'description'=>'required',
        'price'=>'required|numeric|max:999999,99',
        'category'=>'required',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024',



       // regex:/^\d{1,6}(.\d{1,2})?$/
        // |regex:/^\d+(\.\d{2})$/
    ];

    protected $messages = [
        'required'=>'il campo :attribute è richiesto', 
        'numeric'=>'il campo :attribute deve essere un numero',
        'title.min'=>'il titolo è troppo corto',
        'title.max'=>'il titolo è troppo lungo',
        'price.max'=>'hai superato il limite, numero massimo accettato: 999999.99',
        'images.max'=>"l'immagine deve essere massimo di 1 mb",
        'images.image'=>"l'immagine deve essere un'immagine",
        'temporary_images.*.max'=>"l'immagine deve essere massimo di 1 mb",
        'temporary_images.*.image'=>"il file deve essere un'immagine",

        
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function store(){
        $this->validate();
        
        $category = Category::find($this->category);
       
        $announcement = $category->announcements()->create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price' => $this->price,
        ]);

        Auth::user()->announcements()->save($announcement);
        
        session()->flash('message','Annuncio inserito con successo!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
