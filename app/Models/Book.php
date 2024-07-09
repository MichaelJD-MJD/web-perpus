<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    protected $fillable=[
        'cover',
        "judul",
        'genre',
        'pengarang',
        'penerbit',
        'tempat_terbit',
        'tahun_terbit',
        'bahasa',
        'jumlah_halaman',
        'sinopsis',
        'stok'
    ];

    protected $hidden = [

    ];

    public function favorites(){
        return $this->hasMany(Favorite::class,'id_buku','id');
    }

    public function loans(){
        return $this->hasMany(Transaction_loan::class,'id_buku','id');
    }

    public function category():BelongsTo{
        return $this->belongsTo(Category::class,'genre','id');
    }
}
