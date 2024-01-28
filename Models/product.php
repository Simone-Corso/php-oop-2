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
    

/**
 * inserirò il metodo per title,image e price
 */

 public function getImage(){
    return $this->image;
}

public function getTitle(){
    return $this->title;
}

public function getPrice(){
    return $this->price;
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


   /**
      * Prodotti giochi per i cani
      */

      $gamesDogs= new Product (1, "Gioco per Cane in Stoffa Peluche con Squittio" , "Peluche con squittio in stoffa di Trixie è l'accessorio perfetto per divertirti a lungo col tuo cane. ", 10,90 , "https://arcaplanet.vtexassets.com/arquivos/ids/218063/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-cane-in-tessuto-peluche-tric78.jpg?v=637454594866330000");
      $gamesDogs= new Product (2, "Gioco Cane Peluche Zoo Elefante Arancio" , "Il Gioco Cane Zoo Elefante Arancio di Lovedì è un peluche per cvani con squittio per il divertimento quotidiano di Fido.  ", 5,90 , "https://arcaplanet.vtexassets.com/arquivos/ids/260727/lovedi-gioco-cane-peluche-zoo-elefante-arancio2.jpg?v=637618566736000000");
      $gamesDogs= new Product (3, "Gioco Cane Peluche Foodie Anguria" , "Il Peluche Foodie Anguria per cani di Lovedi con squittio è l'accessorio perfetto per divertirti a lungo con Fido.", 8,90, "https://arcaplanet.vtexassets.com/arquivos/ids/273081/LOVEDI-GIOCO-CANE-PELUCHE-FOODIE-ANGURIA.jpg?v=637920239238930000");
      $gamesDogs= new Product (4, "Gioco Cane Peluche Foodie Carota" , "Il Peluche Foodie Carota per cani di Lovedi con squittio è l'accessorio perfetto per divertirti a lungo con Fido.", 2,50 , "https://arcaplanet.vtexassets.com/arquivos/ids/273086/LOVEDI-GIOCO-CANE-PELUCHE-FOODIE-CAROTA.jpg?v=637920243838030000");


      /**
      * Prodotti cucce per i cani
      */

      $kennelsDogs= new Product (1, "Materasso Royal Blu" , "Comodissima e calda cuccia per cani, che diventerà presto il posticino preferito del tuo amico a quattro zampe! Sul suo morbido e alto bordo potrà accoccolarsi dolcemente e appoggiare comodamente la sua testolina.", 40,90 , "https://arcaplanet.vtexassets.com/arquivos/ids/276554/luna-e-teo-cuccia-royal-blu.jpg?v=638034254184470000");
      $kennelsDogs= new Product (2, "Cuccia Ovale Indi" , "Cuccia ovale morbida Indi Lovedì è una cuccia realizzata per il 70% in cotone e per il 30% in poliestere, con interno in ovatta di poliestere siliconato.", 30,90 , "https://arcaplanet.vtexassets.com/arquivos/ids/273272/LOVEDI-CUCCIA-OVALE-INDI-CM.60X52X18.jpg?v=637926932207030000");
      $kennelsDogs= new Product (3, "Cuccia Ovale Morbida Leopardata" , "La cuccia ovale Leopardata di Lovedì è una cuccia morbida per cani e gatti ideato per diventare l'angolino perfetto per sdraiarsi e riposarsi in totale comodità.", 49,90, "https://arcaplanet.vtexassets.com/arquivos/ids/273121/lovedi-cuccia-ovale-comfort-leopardata.jpg?v=637921054709400000");
      $kennelsDogs= new Product (4, "Cuccia Trilly Blu" , "La cuccia per cane e gatto Lovedì Trilly è disponibile in 5 misure e viene prodotta in cotone misto a poliestere che viene prelavato e pretrattato in modo da non restringersi o perdere colore dopo averlo lavato. ", 33,67 , "https://arcaplanet.vtexassets.com/arquivos/ids/260161/LD264---LD265---LD266---LD267---LD268--5-.jpg?v=637611632760930000");


         /**
      * Prodotti cibo per gatti
      */

      $foodCats= new Product (1, "Ket Cat Adult Bocconcini 720 gr" "Ket Cat Adult Bocconcini è l'alimento umido per gatti nelle pratiche lattine da 720 gr.", "1,90","c:\Users\hipho\AppData\Local\Temp\grafiche-magento-bauzaar_-_2023-09-27t122346.813.jpg");
      $foodCats= new Product (2, "Matisse Superpremium Cat Neutered Salmone " , "Matisse Sterilizzato al Salmone è un alimento completo studiato per le esigenze del vostro gatto sterilizzato. ", "9,25", "https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2023-08-02t165805.048.jpg?width=700&height=700&store=default&image-type=image");
      $foodCats= new Product (3, "Stuzzy Cat Patè cotto al vapore per Gatti 100 gr - confezione da 32 " , "Stuzzy Cat Patè cotto al vapore per Gatti 100 gr è un alimento umido completo ad alta digeribilità per gatti adulti,", "16,64", "c:\Users\hipho\AppData\Local\Temp\grafiche-magento-bauzaar_-_2023-04-17t152258.766.jpg");
      $foodCats= new Product (4, "Monge Gemon Cat Adult Bocconcini 415 gr." , "Monge Gemon Cat Bocconcini 415 gr è un cibo umido in lattina per gatti adulti disponibile in diverse ricette tutte completamente naturali e realizzate con carni italiane di altissima qualità. ", "24,90", "c:\Users\hipho\AppData\Local\Temp\grafiche-magento-bauzaar_-_2024-01-09t111241.613.jpg");


   /**
      * Prodotti giochi per i gatti
      */

      $gamesCats= new Product (1, "Gioco per Cane in Stoffa Peluche con Squittio" , "Peluche con squittio in stoffa di Trixie è l'accessorio perfetto per divertirti a lungo col tuo cane. ", 10,90 , "https://arcaplanet.vtexassets.com/arquivos/ids/218063/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-cane-in-tessuto-peluche-tric78.jpg?v=637454594866330000");
      $gamesCats= new Product (2, "Gioco Cane Peluche Zoo Elefante Arancio" , "Il Gioco Cane Zoo Elefante Arancio di Lovedì è un peluche per cvani con squittio per il divertimento quotidiano di Fido.  ", 5,90 , "https://arcaplanet.vtexassets.com/arquivos/ids/260727/lovedi-gioco-cane-peluche-zoo-elefante-arancio2.jpg?v=637618566736000000");
      $gameaCats= new Product (3, "Gioco Cane Peluche Foodie Anguria" , "Il Peluche Foodie Anguria per cani di Lovedi con squittio è l'accessorio perfetto per divertirti a lungo con Fido.", 8,90, "https://arcaplanet.vtexassets.com/arquivos/ids/273081/LOVEDI-GIOCO-CANE-PELUCHE-FOODIE-ANGURIA.jpg?v=637920239238930000");
      $gamesCats= new Product (4, "Gioco Cane Peluche Foodie Carota" , "Il Peluche Foodie Carota per cani di Lovedi con squittio è l'accessorio perfetto per divertirti a lungo con Fido.", 2,50 , "https://arcaplanet.vtexassets.com/arquivos/ids/273086/LOVEDI-GIOCO-CANE-PELUCHE-FOODIE-CAROTA.jpg?v=637920243838030000");


      /**
      * Prodotti cucce per i gatti
      */

      $kennelsCats= new Product (1, "Materasso Royal Blu" , "Comodissima e calda cuccia per cani, che diventerà presto il posticino preferito del tuo amico a quattro zampe! Sul suo morbido e alto bordo potrà accoccolarsi dolcemente e appoggiare comodamente la sua testolina.", 40,90 , "https://arcaplanet.vtexassets.com/arquivos/ids/276554/luna-e-teo-cuccia-royal-blu.jpg?v=638034254184470000");
      $kennelsCats= new Product (2, "Cuccia Ovale Indi" , "Cuccia ovale morbida Indi Lovedì è una cuccia realizzata per il 70% in cotone e per il 30% in poliestere, con interno in ovatta di poliestere siliconato.", 30,90 , "https://arcaplanet.vtexassets.com/arquivos/ids/273272/LOVEDI-CUCCIA-OVALE-INDI-CM.60X52X18.jpg?v=637926932207030000");
      $kennelsCats= new Product (3, "Cuccia Ovale Morbida Leopardata" , "La cuccia ovale Leopardata di Lovedì è una cuccia morbida per cani e gatti ideato per diventare l'angolino perfetto per sdraiarsi e riposarsi in totale comodità.", 49,90, "https://arcaplanet.vtexassets.com/arquivos/ids/273121/lovedi-cuccia-ovale-comfort-leopardata.jpg?v=637921054709400000");
      $kennelsCats= new Product (4, "Cuccia Trilly Blu" , "La cuccia per cane e gatto Lovedì Trilly è disponibile in 5 misure e viene prodotta in cotone misto a poliestere che viene prelavato e pretrattato in modo da non restringersi o perdere colore dopo averlo lavato. ", 33,67 , "https://arcaplanet.vtexassets.com/arquivos/ids/260161/LD264---LD265---LD266---LD267---LD268--5-.jpg?v=637611632760930000");

      ?>

