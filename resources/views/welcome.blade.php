@extends('layouts.myshop')
@section('main')




<div class="masonry-loader masonry-loader-showing">
    <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
        
        @forelse ($produits as $itemProduit )
            <x-produit.card :itemProduit='$itemProduit'/>
        @empty
            Pas de produits
        @endforelse

    </div>
</div> 


@endsection