<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelianDetail extends Model
{
    use HasFactory;

    public function pakaian()
    {
        return $this->belongsTo(Pakaian::class,'id','pakaian_id');
    }

    public function pembelian()
    {
        return $this->belongsTo(Pembelian::class,'id','pembelian_id');
    }
}
