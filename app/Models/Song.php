<?php

namespace App\Models;

use App\Models\Disc;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Song extends Model
{
    use HasFactory;

    function discs(){
        return $this->belongsToMany(Disc::class);
    }

}
