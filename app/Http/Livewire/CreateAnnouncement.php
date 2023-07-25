<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class CreateAnnouncement extends Component
{   

    public $title;
    public $description;
    public $price;

    protected $rules = [
        'title'=>'required|min:5|max:10',
        'description'=>'required',
        'price'=>'required|numeric|regex:/^\d{1,6}(.\d{1,2})?$/',
    ];

    protected $messages = [
        'required'=>'il campo :attribute è richiesto', 
        'numeric'=>'il campo :attribute deve essere un numero',
        'title.min'=>'il titolo è troppo corto',
        'title.max'=>'il titolo è troppo lungo',
        'price.regex'=>'inserisci un prezzo massimo di 999999,99'

    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function store(){
        $this->validate();
        Announcement::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,

        ]);

        session()->flash('message','annuncio inserito con successo!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
