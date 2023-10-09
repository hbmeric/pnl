<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arayalimModel extends Model
{
    use HasFactory;
    protected $table = "arayalim";
    protected $fillable = ["adi","telefon","arandimi","tekrar","tekrar_tarih","notlar","create_at","updated_at"];
}
