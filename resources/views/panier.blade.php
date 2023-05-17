@extends('layouts.myshop')
@section('main')

<div class="row pb-4 mb-5">
    <div class="col-lg-8 mb-5 mb-lg-0">
        <form method="post" action="">
            <div class="table-responsive">
                <table class="shop_table cart">
                    <thead>
                        <tr class="text-color-dark">
                            <th class="product-thumbnail" width="15%">
                                &nbsp;
                            </th>
                            <th class="product-name text-uppercase" width="30%">
                                Produits
                            </th>
                            <th class="product-price text-uppercase" width="15%">
                                Prix
                            </th>
                            <th class="product-quantity text-uppercase" width="20%">
                                Quantité
                            </th>
                            <th class="product-subtotal text-uppercase text-end" width="20%">
                                Sous-total
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($carts as $itemCart)
                        
                        <x-panier.card :itemCart='$itemCart'/>
        
                        @empty
                            Panier vide 
                        @endforelse

                    </tbody>

@endsection
