<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user','id_buku'
    ];

    protected $hidden = [

    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class,'id_user','id');
    }

    public function book():BelongsTo{
        return $this->belongsTo(Book::class,'id_buku','id');
    }
}
