<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basaranlarModel extends Model
{
    use HasFactory;
    protected $table="basaranlar";
    protected $fillable = ["adi","okul","puan","siralama","created_at","updated_at","aktif","photo"];
}
