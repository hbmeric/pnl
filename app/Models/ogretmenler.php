<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ogretmenler extends Model
{
    use HasFactory;
    protected $table="ogretmenler";
    protected $fillable = ["adi","brans","photo","cv","created_at","updated_at"];
    

}
