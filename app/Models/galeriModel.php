<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeriModel extends Model
{
    use HasFactory;
    protected $table = "galeri";
    protected $fillable = ["photo","siralama","created_at","updated_at"];
}
