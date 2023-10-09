<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bannerModel extends Model
{
    use HasFactory;
    protected $table = "banner";
    protected $fillable = ["image","sira","created_at","updated_at"];
    
}
