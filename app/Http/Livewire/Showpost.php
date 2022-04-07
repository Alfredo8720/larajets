<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Registro;
use Livewire\WithPagination;

class Showpost extends Component

{
    use WithPagination;

    public $title;
    public $cont = 0;

    public function contador(){

        $this->cont++;
    }

    public function render()
    {
        $reg=Registro::paginate();
        //return $reg;
        return view('livewire.showpost', compact('reg'));
        //return view('livewire.showpost');
    }
}
