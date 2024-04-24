<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriPakaian extends Model
{
    use HasFactory;

    protected $table = 'kategoriPakaians';

    public function pakaian()
    {
    return $this->hasMany(pakaian::class,'id','kategori_id');
    }   


}


