<?php

 /**
*Dobbiamo immaginare quali classi necessarie per creare uno shop online per l'e-commerce che vende prodotti per gli animali.
*farò la classe per i prodotti.
 */

    class Product {
        public $productId;
        public $title;
        public $description;
        public $price;
        public $image;

    /**
     * qua inserirò il costruct.
     */
    
    
        public function __construct($productId, $title, $description, $price , $image ){
            $this->productId = $productId;
            $this->title = $title;
            $this->description = $description;
            $this->price = $price;
            $this->image = $image;

        }
    
    
    }

    /**
     * Andrò a creare dei prodotti per i cani
     */


     /**
      * Prodotti cibo per cani
      */

      $foodDogs= new Product (1, "Stuzzy Dog Monoprotein Lattina 400G" , "Cibo umido monoproteico per cani di Stuzzy, in gustioso patè con alta percentuale di materie prime, con pezzi selezionati. La ricetta monoproteica, grain free e gluten free, è caratterizzata da un'elevata digeribilità, priva di coloranti e conservanti aggiunti, adatta ai cani cui è stato prescritto un regime alimentare a eliminazione.", 2,30, "https://arcaplanet.vtexassets.com/arquivos/ids/257857/stuzzy-monoprotein-agnello-.jpg?v=637588282248800000")

