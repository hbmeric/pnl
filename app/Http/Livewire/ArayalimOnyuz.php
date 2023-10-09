<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\arayalimModel;
class ArayalimOnyuz extends Component
{
    public $adi;
    public $tel;
    public $gonderildi = 0;
  
    function ekle() {
        
        $data = [
            "adi" => $this->adi,
            "telefon" => $this->tel,
        ];
        arayalimModel::create($data);
        $this->gonderildi = 1;
    }
    public function render()
    {
        return view('livewire.arayalim-onyuz');
    }
}
