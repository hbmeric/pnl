<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\iletisimModel;
class IletisimOnyuz extends Component
{
    public $adi,$email,$tel,$konu,$icerik,$ip,$gonderildi = 0;
    function ekle() {
        $ip = request()->ip();
        $data = [
            "adi" => $this->adi,
            "email" => $this->email,
            "tel" => $this->tel,
            "ip" => $ip,
            "konu" => $this->konu,
            "icerik" => $this->icerik,
        ];
        iletisimModel::create($data);
        $this->gonderildi = 1;
    }

    public function render()
    {
        return view('livewire.iletisim-onyuz');
    }
}
