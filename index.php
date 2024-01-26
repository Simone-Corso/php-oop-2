<?php

require_once __DIR__ . '/Models/product.php';

/**
 * qua inserirò Array dei prodotti per le cards
 */

 $foodDogs= [
                new Product     (1, "Stuzzy Dog Monoprotein Lattina 400G" , "Cibo umido monoproteico per cani di Stuzzy, in gustioso patè con alta percentuale di materie prime, con pezzi selezionati. La ricetta monoproteica, grain free e gluten free, è caratterizzata da un'elevata digeribilità, priva di coloranti e conservanti aggiunti, adatta ai cani cui è stato prescritto un regime alimentare a eliminazione.", 2,30, "https://arcaplanet.vtexassets.com/arquivos/ids/257857/stuzzy-monoprotein-agnello-.jpg?v=637588282248800000");
                new Product (2, "Virtus Protein Selection Dog Pate Compatto Lattina 400G" , "Virtus soddisfa le esigenze nutrizionali del tuo cane e gatto attraverso una gamma di alimenti CrueltyFree, Grain Free o Low Grain. La base di una dieta sana e naturale per il tuo animale prevede un'alta percentuale di proteine, una quantità adeguata di grassi e pochi carboidrati per offrire genuinità e naturalità. ", 2,90, "https://arcaplanet.vtexassets.com/arquivos/ids/257857/stuzzy-monoprotein-agnello-.jpg?v=637588282248800000");
                new Product (3, "Hi Beef Dog Lattina Multipack 6x300G" , "Cibo umido Hi Beef per cani adulti di tutte le taglie è un alimento completo e bilanciato per soddisfare al 100% il fabbisogno nutrizionale del tuo amico a quattro zampe. Il morbido paté Hi Beef adult all breeds è ottimo in caso di diete ad esclusione.", 1,90, "https://arcaplanet.vtexassets.com/arquivos/ids/251615/hi-beef-dog-gr-300-adult-manzo.jpg?v=637455077605270000");
                new Product (4, "Next Dog Lattina 400G" , "Next Dog Lattina 400Gè è un nuovissimo e delizioso patè ricco di carne e verdure, un alimento completo e bilanciato per cani adulti di tutte le taglie e razze disponibile in lattina da 400 g.", 5,99 , "https://arcaplanet.vtexassets.com/arquivos/ids/248992/next-cane-coniglio.jpg?v=637455051936600000");
 ];


 $gamesDogs= [
                new Product (1, "Gioco per Cane in Stoffa Peluche con Squittio" , "Peluche con squittio in stoffa di Trixie è l'accessorio perfetto per divertirti a lungo col tuo cane. ", 10,90 , "https://arcaplanet.vtexassets.com/arquivos/ids/218063/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-cane-in-tessuto-peluche-tric78.jpg?v=637454594866330000");
                new Product (2, "Gioco Cane Peluche Zoo Elefante Arancio" , "Il Gioco Cane Zoo Elefante Arancio di Lovedì è un peluche per cvani con squittio per il divertimento quotidiano di Fido.  ", 5,90 , "https://arcaplanet.vtexassets.com/arquivos/ids/260727/lovedi-gioco-cane-peluche-zoo-elefante-arancio2.jpg?v=637618566736000000");
                new Product (3, "Gioco Cane Peluche Foodie Anguria" , "Il Peluche Foodie Anguria per cani di Lovedi con squittio è l'accessorio perfetto per divertirti a lungo con Fido.", 8,90, "https://arcaplanet.vtexassets.com/arquivos/ids/273081/LOVEDI-GIOCO-CANE-PELUCHE-FOODIE-ANGURIA.jpg?v=637920239238930000");
                new Product (4, "Gioco Cane Peluche Foodie Carota" , "Il Peluche Foodie Carota per cani di Lovedi con squittio è l'accessorio perfetto per divertirti a lungo con Fido.", 2,50 , "https://arcaplanet.vtexassets.com/arquivos/ids/273086/LOVEDI-GIOCO-CANE-PELUCHE-FOODIE-CAROTA.jpg?v=637920243838030000");
 ];

 $kennelsDogs = [
                new Product (1, "Materasso Royal Blu" , "Comodissima e calda cuccia per cani, che diventerà presto il posticino preferito del tuo amico a quattro zampe! Sul suo morbido e alto bordo potrà accoccolarsi dolcemente e appoggiare comodamente la sua testolina.", 40,90 , "https://arcaplanet.vtexassets.com/arquivos/ids/276554/luna-e-teo-cuccia-royal-blu.jpg?v=638034254184470000");
                new Product (2, "Cuccia Ovale Indi" , "Cuccia ovale morbida Indi Lovedì è una cuccia realizzata per il 70% in cotone e per il 30% in poliestere, con interno in ovatta di poliestere siliconato.", 30,90 , "https://arcaplanet.vtexassets.com/arquivos/ids/273272/LOVEDI-CUCCIA-OVALE-INDI-CM.60X52X18.jpg?v=637926932207030000");
                new Product (3, "Cuccia Ovale Morbida Leopardata" , "La cuccia ovale Leopardata di Lovedì è una cuccia morbida per cani e gatti ideato per diventare l'angolino perfetto per sdraiarsi e riposarsi in totale comodità.", 49,90, "https://arcaplanet.vtexassets.com/arquivos/ids/273121/lovedi-cuccia-ovale-comfort-leopardata.jpg?v=637921054709400000");
                new Product (4, "Cuccia Trilly Blu" , "La cuccia per cane e gatto Lovedì Trilly è disponibile in 5 misure e viene prodotta in cotone misto a poliestere che viene prelavato e pretrattato in modo da non restringersi o perdere colore dopo averlo lavato. ", 33,67 , "https://arcaplanet.vtexassets.com/arquivos/ids/260161/LD264---LD265---LD266---LD267---LD268--5-.jpg?v=637611632760930000");
 ]


?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Shop Online</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>