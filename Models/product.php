<?php

 /**
*Dobbiamo immaginare quali classi necessarie per creare uno shop online per l'e-commerce che vende prodotti per gli animali.
*farò la classe per i prodotti.
 */

    class Prodotto{
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


