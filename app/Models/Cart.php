<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'produit_id','quantite','prix'];

    public function produit() : BelongsTo
    {
        return $this->belongsTo(Produit::class) ; 
    }
}
