<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateAnnouncement extends Component
{ 
    public $title;
    public $description;
    public $price;
    public $category;

    protected $rules = [
        'title'=>'required|min:5',
        'description'=>'required',
        'price'=>'required|numeric|max:999999,99|regex:/^\d+(\.\d{2})$/',
        'category'=>'required'
       // regex:/^\d{1,6}(.\d{1,2})?$/
    ];

    protected $messages = [
        'required'=>'il campo :attribute è richiesto', 
        'numeric'=>'il campo :attribute deve essere un numero',
        'title.min'=>'il titolo è troppo corto',
        'title.max'=>'il titolo è troppo lungo',
        'price.max'=>'hai superato il limite, numero massimo accettato: 999999.99',
        'price.regex'=>'devi inserire per forza due cifre decimali: ex 1234.00'
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
        
        session()->flash('message','annuncio inserito con successo!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
