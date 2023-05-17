<tr class="cart_table_item">
    <td class="product-thumbnail">
        <div class="product-thumbnail-wrapper">
            <a href="#" class="product-thumbnail-remove" title="Remove Product">
                <i class="fas fa-times"></i>
            </a>
            <a href="shop-product-sidebar-right.html" class="product-thumbnail-image" title="Photo Camera">
                <img width="90" height="90" alt="" class="img-fluid" src="{{Storage::url($itemCart->produit->image)}}">
            </a>
        </div>
    </td>
    <td class="product-name">
        <a href="shop-product-sidebar-right.html" class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">{{$itemCart->produit->name}}</a>
    </td>
    <td class="product-price">
        <span class="amount font-weight-medium text-color-grey">{{$itemCart->prix}}</span>
    </td>
    <td class="product-quantity">
        <div class="quantity float-none m-0">
            <input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
            <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
            <input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+">
        </div>
    </td>
    <td class="product-subtotal text-end">
        <span class="amount text-color-dark font-weight-bold text-4">{{$itemCart->quantite * $itemCart->prix }}</span>
    </td>
</tr>