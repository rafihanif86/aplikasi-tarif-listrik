<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    protected $guarded = [];
    
    public function listriks(){
        return $this->hasMany(Listrik::class);
    }
}
