<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\User;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = ['categorie_id', 'user_id','name', 'description', 'prix', 'image'];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class) ; 
    }


    public function categorie() : BelongsTo
    {
        return $this->belongsTo(Categorie::class) ; 
    }



 /*   public function category() : BelongsTo
    {
        return $this->belongsTo(Categorie::class) ; 
    }*/
}
