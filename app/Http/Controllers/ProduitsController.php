<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProduitsController extends Controller
{
    public function index($categorie = 0)
    {
        //
        $produits = Produit::orderBy('created_at','desc')->paginate(10); // Liste des produits
        $categories = Categorie::orderBy('name','asc')->get(); // Liste des categories

        if ($categorie != 0) {
            $produits = Produit::where('categorie_id', $categorie)->orderBy('created_at','desc')->paginate(10) ; 
        } 

        return view('welcome',compact('produits','categories'));
    }

    // Permet d'afficher le détail du produit mais aussi les produits similaires
    public function detail(Produit $produit)
    {
        
        $produits = Produit::where('categorie_id', $produit->categorie_id)
                          -> inRandomOrder()->limit(4)->get(); // Sélectionner les 4 produits similaires de la catégorie aléatoirement 

        
        $categories = Categorie::orderBy('name','asc')->get();
        
        return view('detail', compact('produit', 'produits', 'categories'));
    }

    
    
}
