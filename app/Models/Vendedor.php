<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendedor extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "vendedores";

    public function Autos(){
        return $this->hasMany(Auto::class);
    }

}

