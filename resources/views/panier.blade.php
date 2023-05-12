<div>
    <h1>PANIER</h1>


    <div class="relative py-10 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="font-serif text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        PRODUITS
                    </th>
    
                    <th scope="col" class="px-6 py-3">
                        QUANTITE
                    </th>

                    <th scope="col" class="px-6 py-3">
                        PRIX
                    </th>

                    <th scope="col" class="px-6 py-3">
                        TOTAL
                    </th>
    
                </tr>
            </thead>

            <tbody>

                @forelse ($carts as $itemCart)
                <tr>
                    <th scope="col" class="px-6 py-3 font-serif">
                        {{$itemCart->produit->name}}
                    </th>

                    <th scope="col" class="px-6 py-3 font-serif">
                        {{$itemCart->quantite}}
                    </th>

                    <th scope="col" class="px-6 py-3 font-serif">
                        {{$itemCart->prix}}
                    </th>

                    <th scope="col" class="px-6 py-3 font-serif">
                        {{$itemCart->quantite * $itemCart->prix }}
                    </th>
                </tr>

                @empty
                    Panier vide 
                @endforelse

                <tr>
                    <th>
                        TOTAL COMMANDE : 
                    </th>
                </tr>

            </tbody>

        </table>
    </div>

</div>
