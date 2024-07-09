<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction_return extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_peminjaman","tanggal_pengembalian","denda"
    ];

    protected $hidden = [

    ];

    public function loan(): BelongsTo{
        return $this->belongsTo(Transaction_loan::class,'id_peminjaman','id');
    }
}
