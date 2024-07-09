<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction_loan extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_user","id_buku","tanggal_pinjam","tanggal_kembali","status"
    ];

    protected $hidden = [

    ];

    public function return(): HasOne{
        return $this->hasOne(Transaction_return::class, 'id_peminjaman','id');
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class,'id_user','id');
    }

    public function book():BelongsTo{
        return $this->belongsTo(Book::class,'id_buku','id');
    }
}
