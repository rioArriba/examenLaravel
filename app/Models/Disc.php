<?php

namespace App\Models;

use App\Models\Song;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Disc extends Model
{
    use HasFactory;

    function songs(){
        return $this->belongsToMany(Song::class);
    }

    function company(){
        return $this->belongsTo(Company::class);
    }
}
