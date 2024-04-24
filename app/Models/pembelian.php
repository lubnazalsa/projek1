<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;

    public function pembelianDetails()
    {
        return $this->hasMany(PembelianDetail::class,'id','pembelian_id');
    }

    public function metodePembayaran()
    {
        return $this->belongsTo(MetodePembayaran::class,'id');
    }
}
