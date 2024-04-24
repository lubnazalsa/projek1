<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakaian extends Model
{
    use HasFactory;

    protected $table = 'pakaian';
    protected $primaryKey = 'id_pakaian'; 
    protected $guarded = ['id_pakaian'];

   

    public function kategoriPakaian()
    {
        return $this->belongsTo(KategoriPakaian::class,'id','kategori_id');
    }

    public function pembelianDetails()
    {
        return $this->hasMany(PembelianDetail::class,'id','pakaian_id');
    }
}
