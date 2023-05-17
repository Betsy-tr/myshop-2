<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    //
    public function index()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $produits = Produit::orderBy('created_at','desc')->get();
        $categories = Categorie::orderBy('name','asc')->get();

        return view('panier',compact('carts','produits','categories'));
    }


    /*
    *  Méthode qui permet d'jouter au caddie, contrôle l'existence du produit et met à jour la quantité
    */

    public function addToCart(Produit $produit)
    {
        /* On vérifie l'existence du produit dans le panier 
           SELECT * FROM Cart WHERE user_id = " ? " AND produit_id = $produit -> id LIMIT (0 , 1) ;
        */ 

        $cart = Cart::where('user_id', Auth::user()->id)
                   -> where('produit_id', $produit->id)
                   -> first();

          
        /* Penser à contrôler l'existence du produit
           UPDATE Cart SET quantite = 4 WHERE id = 2 ;
        */
        
        if (isset($cart)) {
            
            Cart::where('id', $cart->id)->update(["quantite" => $cart->quantite+1]);
        } else {
            
            Cart::create(["user_id" => Auth::user()->id,
                          "produit_id" => $produit->id,
                          "quantite" => 1,
                          "prix" =>$produit->prix]);

        };
        return Redirect::route('accueil');
    }
}
