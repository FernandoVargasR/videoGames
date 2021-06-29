<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ftpvideogame extends Model
{
    use HasFactory;
    public $timestamps = false;

    //relacion muchos a muchos
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
