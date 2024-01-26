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

      $foodDogs= new Product (1, "Stuzzy Dog Monoprotein Lattina 400G" , "Cibo umido monoproteico per cani di Stuzzy, in gustioso patè con alta percentuale di materie prime, con pezzi selezionati. La ricetta monoproteica, grain free e gluten free, è caratterizzata da un'elevata digeribilità, priva di coloranti e conservanti aggiunti, adatta ai cani cui è stato prescritto un regime alimentare a eliminazione.", 2,30, "https://arcaplanet.vtexassets.com/arquivos/ids/257857/stuzzy-monoprotein-agnello-.jpg?v=637588282248800000");
      $foodDogs= new Product (2, "Virtus Protein Selection Dog Pate Compatto Lattina 400G" , "Virtus soddisfa le esigenze nutrizionali del tuo cane e gatto attraverso una gamma di alimenti CrueltyFree, Grain Free o Low Grain. La base di una dieta sana e naturale per il tuo animale prevede un'alta percentuale di proteine, una quantità adeguata di grassi e pochi carboidrati per offrire genuinità e naturalità. ", 2,90, "https://arcaplanet.vtexassets.com/arquivos/ids/257857/stuzzy-monoprotein-agnello-.jpg?v=637588282248800000");
      $foodDogs= new Product (3, "Hi Beef Dog Lattina Multipack 6x300G" , "Cibo umido Hi Beef per cani adulti di tutte le taglie è un alimento completo e bilanciato per soddisfare al 100% il fabbisogno nutrizionale del tuo amico a quattro zampe. Il morbido paté Hi Beef adult all breeds è ottimo in caso di diete ad esclusione.", 1,90, "https://arcaplanet.vtexassets.com/arquivos/ids/251615/hi-beef-dog-gr-300-adult-manzo.jpg?v=637455077605270000");
      $foodDogs= new Product (4, "Next Dog Lattina 400G" , "Next Dog Lattina 400Gè è un nuovissimo e delizioso patè ricco di carne e verdure, un alimento completo e bilanciato per cani adulti di tutte le taglie e razze disponibile in lattina da 400 g.", 5,99 , "https://arcaplanet.vtexassets.com/arquivos/ids/248992/next-cane-coniglio.jpg?v=637455051936600000");


