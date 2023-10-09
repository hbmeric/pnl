<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class icerikModel extends Model
{
    use HasFactory;
    protected $table="icerik";
    protected $fillable = ["baslik","slug","icerik","created_at","updated_at"];
    
}
