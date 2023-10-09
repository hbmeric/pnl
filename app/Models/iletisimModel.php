<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iletisimModel extends Model
{
    use HasFactory;
    protected $table = "iletisim";
    protected $fillable = ["adi","email","tel","konu","icerik","okundu","cvp","created_at","updated_at","ip"];
}
