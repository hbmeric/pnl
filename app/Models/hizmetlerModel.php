<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hizmetlerModel extends Model
{
    use HasFactory;
    protected $table = "hizmetler";
    protected $fillable = ["baslik","ozet","icerik","photo","created_at","updated_at"];
}
