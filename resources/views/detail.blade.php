@extends('layouts.myshop')
@section('main')

<div class="row">
    <div class="col-md-5 mb-5 mb-md-0">

        <div class="thumb-gallery-wrapper">
            <div class="mb-3">
                <div>
                    <img alt="" class="img-fluid" src={{Storage::url($produit->image)}}>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-7">

        <div class="summary entry-summary position-relative">

            <div class="position-absolute top-0 right-0">
                <div class="products-navigation d-flex">
                    <a href="#" class="prev text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-original-title="Red Ladies Handbag"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" class="next text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-original-title="Green Ladies Handbag"><i class="fas fa-chevron-right"></i></a>
                </div>
        </div>

          <h1 class="mb-0 font-weight-bold text-7">{{$produit->name}}</h1>

          <div class="pb-0 clearfix d-flex align-items-center">
              <div title="Rated 3 out of 5" class="float-start">
                  <input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
             </div>

             <div class="review-num">
                 <a href="#description" class="text-decoration-none text-color-default text-color-hover-primary" data-hash data-hash-offset="0" data-hash-offset-lg="75" data-hash-trigger-click=".nav-link-reviews" data-hash-trigger-click-delay="1000">
                     <span class="count text-color-inherit" itemprop="ratingCount">(2</span> reviews)
                  </a>
             </div>
         </div>

         <div class="divider divider-small">
              <hr class="bg-color-grey-scale-4">
         </div>

         <p class="price mb-3">
             <span class="sale text-color-dark">$15,00</span>
             <span class="amount">{{$produit->prix}}</span>
         </p>

         <p class="text-3-5 mb-3">{{$produit->description}}</p>

            <ul class="list list-unstyled text-2">
                <li class="mb-0">DISPONIBILITE: <strong class="text-color-dark">Disponible</strong></li>
                <li class="mb-0">SKU: <strong class="text-color-dark">1234567890</strong></li>
                <li class="mb-0">Categorie: <strong class="text-color-dark">{{$produit->categorie->name}}</strong></li>
            </ul>

            <form enctype="multipart/form-data" method="post" class="cart" action="shop-cart.html">
              <table class="table table-borderless" style="max-width: 300px;">
                 <tbody>
                      <tr>
                          <td class="align-middle text-2 px-0 py-2">taille:</td>
                           <td class="px-0 py-2">
                               <div class="custom-select-1">
                                   <select name="size" class="form-control form-select text-1 h-auto py-2">
                                       <option value="">Veuillez choisir</option>
                                      <option value="blue">Petit</option>
                                      <option value="red">Normal</option>
                                      <option value="green">Grand</option>
                                  </select>
                              </div>
                          </td>
                      </tr>
                     <tr>
                          <td class="align-middle text-2 px-0 py-2">Couleur:</td>
                           <td class="px-0 py-2">
                              <div class="custom-select-1">
                                  <select name="color" class="form-control form-select text-1 h-auto py-2">
                                      <option value="">Veuillez choisir</option>
                                      <option value="blue">Bleu</option>
                                      <option value="red">Rouge</option>
                                      <option value="green">Vert</option>
                                  </select>
                               </div>
                         </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <div class="quantity quantity-lg">
                    <input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
                    <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                    <input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
                </div>
                <button type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">Ajouter au panier</button>
                <hr>
            </form>
        </div>

    </div>
</div>

@endsection