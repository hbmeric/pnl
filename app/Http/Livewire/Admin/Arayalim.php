<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\arayalimModel;

class Arayalim extends Component
{
    public function arayiver($id) {

    }
    public function tekrar($id) {

    }
    public function render()
    {
        $veriler = arayalimModel::orderBy("created_at","desc")->get();
        return view('livewire.admin.arayalim',compact("veriler"));
    }
}
