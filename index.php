<?php

require_once __DIR__ . '/Models/product.php';

/**
 * qua inserirò Array dei prodotti per le cards
 */

 $foodDogs= [
                new Product (1, "Stuzzy Dog Monoprotein Lattina 400G" , "Cibo umido monoproteico per cani di Stuzzy, in gustioso patè con alta percentuale di materie prime, con pezzi selezionati. ", "2,30" , "https://arcaplanet.vtexassets.com/arquivos/ids/257857/stuzzy-monoprotein-agnello-.jpg?v=637588282248800000"),
                new Product (2, "Virtus Protein Selection Dog Pate Compatto Lattina 400G" , "Virtus soddisfa le esigenze nutrizionali del tuo cane e gatto attraverso una gamma di alimenti CrueltyFree, Grain Free o Low Grain. ", "2,90", "https://arcaplanet.vtexassets.com/arquivos/ids/291796/Virtus-Dog-Protein-Selection-Pate-Compatto-Lattina-400G-10169653.jpg?v=638354859006600000"),
                new Product (3, "Hi Beef Dog Lattina Multipack 6x300G" , "Cibo umido Hi Beef per cani adulti di tutte le taglie è un alimento completo e bilanciato per soddisfare al 100% il fabbisogno nutrizionale del tuo amico a quattro zampe.", "1,90", "https://arcaplanet.vtexassets.com/arquivos/ids/251615/hi-beef-dog-gr-300-adult-manzo.jpg?v=637455077605270000"),
                new Product (4, "Next Dog Lattina 400G" , "Next Dog Lattina 400Gè è un nuovissimo e delizioso patè ricco di carne e verdure, un alimento completo e bilanciato per cani adulti di tutte le taglie e razze disponibile in lattina da 400 g.", "5,99" , "https://arcaplanet.vtexassets.com/arquivos/ids/248992/next-cane-coniglio.jpg?v=637455051936600000"),
 ];


 $gamesDogs= [
                new Product (1, "Gioco per Cane in Stoffa Peluche con Squittio" , "Peluche con squittio in stoffa di Trixie è l'accessorio perfetto per divertirti a lungo col tuo cane. ", "10,90" , "https://arcaplanet.vtexassets.com/arquivos/ids/218063/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-cane-in-tessuto-peluche-tric78.jpg?v=637454594866330000"),
                new Product (2, "Gioco Cane Peluche Zoo Elefante Arancio" , "Il Gioco Cane Zoo Elefante Arancio di Lovedì è un peluche per cvani con squittio per il divertimento quotidiano di Fido.  ", "5,90" , "https://arcaplanet.vtexassets.com/arquivos/ids/260727/lovedi-gioco-cane-peluche-zoo-elefante-arancio2.jpg?v=637618566736000000"),
                new Product (3, "Gioco Cane Peluche Foodie Anguria" , "Il Peluche Foodie Anguria per cani di Lovedi con squittio è l'accessorio perfetto per divertirti a lungo con Fido.", "8,90", "https://arcaplanet.vtexassets.com/arquivos/ids/273081/LOVEDI-GIOCO-CANE-PELUCHE-FOODIE-ANGURIA.jpg?v=637920239238930000"),
                new Product (4, "Gioco Cane Peluche Foodie Carota" , "Il Peluche Foodie Carota per cani di Lovedi con squittio è l'accessorio perfetto per divertirti a lungo con Fido.", "2,50" , "https://arcaplanet.vtexassets.com/arquivos/ids/273086/LOVEDI-GIOCO-CANE-PELUCHE-FOODIE-CAROTA.jpg?v=637920243838030000"),
 ];

 $kennelsDogs = [
                new Product (1, "Materasso Royal Blu" , "Comodissima e calda cuccia per cani, che diventerà presto il posticino preferito del tuo amico a quattro zampe! Sul suo morbido e alto bordo potrà accoccolarsi dolcemente e appoggiare comodamente la sua testolina.", "40,90" , "https://arcaplanet.vtexassets.com/arquivos/ids/276554/luna-e-teo-cuccia-royal-blu.jpg?v=638034254184470000"),
                new Product (2, "Cuccia Ovale Indi" , "Cuccia ovale morbida Indi Lovedì è una cuccia realizzata per il 70% in cotone e per il 30% in poliestere, con interno in ovatta di poliestere siliconato.", "30,90" , "https://arcaplanet.vtexassets.com/arquivos/ids/273272/LOVEDI-CUCCIA-OVALE-INDI-CM.60X52X18.jpg?v=637926932207030000"),
                new Product (3, "Cuccia Ovale Morbida Leopardata" , "La cuccia ovale Leopardata di Lovedì è una cuccia morbida per cani e gatti ideato per diventare l'angolino perfetto per sdraiarsi e riposarsi in totale comodità.", "49,90", "https://arcaplanet.vtexassets.com/arquivos/ids/273121/lovedi-cuccia-ovale-comfort-leopardata.jpg?v=637921054709400000"),
                new Product (4, "Cuccia Trilly Blu" , "La cuccia per cane e gatto Lovedì Trilly è disponibile in 5 misure e viene prodotta in cotone misto a poliestere che viene prelavato e pretrattato in modo da non restringersi o perdere colore dopo averlo lavato. ", "33,67" , "https://arcaplanet.vtexassets.com/arquivos/ids/260161/LD264---LD265---LD266---LD267---LD268--5-.jpg?v=637611632760930000"),
 ];

 $foodCats = [
                new Product (1, "Ket Cat Adult Bocconcini 720 gr","Ket Cat Adult Bocconcini è l'alimento umido per gatti nelle pratiche lattine da 720 gr.", "1,90","https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dw6e622f32/143643-lt-720gr-bocc.-pollo-e-tacchino.png?sw=800&sh=800"),
                new Product (2, "Matisse Superpremium Cat Neutered Salmone " , "Matisse Sterilizzato al Salmone è un alimento completo studiato per le esigenze del vostro gatto sterilizzato. ", "9,25", "https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2023-08-02t165805.048.jpg?width=700&height=700&store=default&image-type=image"),
                new Product (3, "Stuzzy Cat Patè cotto al vapore per Gatti 100 gr " , "Stuzzy Cat Patè cotto al vapore per Gatti 100 gr è un alimento umido completo ad alta digeribilità per gatti adulti,", "16,64", "https://egress.storeden.net/gallery/6123799c5fb8e0512818534b"),
                new Product (4, "Monge Gemon Cat Adult Bocconcini 415 gr." , "Monge Gemon Cat Bocconcini 415 gr è un cibo umido in lattina per gatti adulti disponibile in diverse ricette tutte completamente naturali e realizzate con carni italiane di altissima qualità. ", "24,90", "https://egress.storeden.net/jpg/5f90595ebe7ea02372aad40b"),
 ];

 $gamesCats = [

                new Product (1, "Cannetta gioco TIAKI Pesce con piume" , "Cannetta gioco per gatti, con ciondolo, spago in cotone, bastoncino liscio in vero legno, in 4 colori ", "3,49" , "https://shop-cdn-m.mediazs.com/bilder/met/prezzo/cannetta/gioco/tiaki/pesce/con/piume/6/400/351997_pla_fish_feather_cat_dagler_fg_0927_6.jpg"),
                new Product (2, "Graffiatoio Onda" , "Graffiatoio per gatti, realizzato in cartone ondulato, riciclabile al 100%. Ideale per rifarsi le unghie, giocare o sonnecchiare!", "8,90" , "https://shop-cdn-m.mediazs.com/bilder/graffiatoio/onda/3/400/jan_mix_3_71_3.jpg"),
                new Product (3, "Topino sonoro con catnip" , "Topino sonoro con catnip, in peluche e feltro rosso, con microchip integrato per effetti sonori realistici.", "5,78", "https://shop-cdn-m.mediazs.com/bilder/topino/sonoro/con/catnip/5/400/55405_PLA_Katzenspielzeug_Maus_mit_Katzenminze_und_Stimme_FG_DSC0500_5.jpg"),
                new Product (4, "Gioco per gatti Felton" , "Gioco versatile Felton per gatti, con bastoncino in matatabi che stimola al gioco", "3,50" , "https://shop-cdn-m.mediazs.com/bilder/gioco/per/gatti/felton/2/400/197396_pla_katzenspielzeug_felton_fg_8212_2.jpg"),

      ];

$kennelsCats = [
                new Product (1, "Casetta Tenda da sole" , "Casetta verde/bianco a 2 piani Tenda da sole per gatti e cani piccoli, in legno laccato verde composta da 2 vani interni & veranda con ringhiera.", "124,90" , "https://shop-cdn-m.mediazs.com/bilder/casetta/tenda/da/sole/4/400/100823_pla_katzenhaus_sonnendach_fg_5059_4.jpg"),
                 new Product (2, "Casetta gioco Maisonette" , "Casetta gioco Maisonette in legno resistente alle intemperie, con tetto bitumato rosso, terrazzino protetto da ringhiera e scaletta.", "89,90" , "https://shop-cdn-m.mediazs.com/bilder/casetta/gioco/maisonette/1/400/100822_katzenhaus_maisonette_fg_5055_1.jpg"),
                new Product (3, "Casetta per gatti piccoli Prince " , "Favolosa Casetta per gatti piccoli Prince, composta da terrazza panoramica sul tetto camera da letto da sogno","67,90", "https://shop-cdn-m.mediazs.com/bilder/casetta/per/gatti/e/cani/piccoli/prince/9/400/37836_pla_katzenhaus_prince_fg_4250_9.jpg"),
                 new Product (4, "Nicchia Aumüller in vimini con cuscino" , " Nicchia per gatti, con maniglia, porticina con griglia rimovibile, Made in Germany.", "64,89" , "https://shop-cdn-m.mediazs.com/bilder/nicchia/aumller/in/vimini/con/cuscino/1/400/78349_pla_aumueller_korbhoehle_1.jpg"),
];


?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Shop Online</title>
    
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pet-Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cani</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gatti</a>
        </li>
      </ul>
      <span class="navbar-text">
        
      </span>
    </div>
  </div>
</nav>
</header>

<main>

<h1 class="title-cani text-center mt-4">
    Cibo per cani
</h1>
<div class="container">
    <div class="row d-flex justify-content-center text-center">
    <?php
foreach ($foodDogs as $product) {
    
?>
    <div class="product-card col-md-2 p-4 mt-5 ">
        <div class="card h-100">
            <img src="<?php echo ($product->image) ?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo ($product->title) ?></h5>
                <p class="card-text"><?php echo ($product->price) ?> €</p>
                <p class="description"><?php echo ($product->description)?></p>
            </div>
        </div>
    </div>
<?php
}
?>

        </div>
    </div>
</div>

<h1 class="title-games text-center mt-4">
    Giochi per cani
</h1>

<div class="container">
    <div class="row d-flex justify-content-center text-center">
    <?php
foreach ($gamesDogs as $product) {
?>
    <div class="product-card col-md-2 p-4">
        <div class="card h-100">
            <img src="<?php echo ($product->image) ?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo ($product->title) ?></h5>
                <p class="card-text"> <?php echo ($product->price) ?> €</p>
                <p class="description"><?php echo ($product->description)?></p>
            </div>
        </div>
    </div>
<?php
}
?>

        </div>
    </div>
</div>

<h1 class="title-kennels text-center mt-4">
    Cucce per cani
</h1>

<div class="container">
    <div class="row d-flex justify-content-center text-center">
    <?php
foreach ($kennelsDogs as $product) {
?>
    <div class="product-card col-md-2 p-4">
        <div class="card h-100">
            <img src="<?php echo ($product->image) ?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo ($product->title) ?></h5>
                <p class="card-text"><?php echo ($product->price) ?> €</p>
                <p class="description"> <?php echo ($product->description)?></p>
            </div>
        </div>
    </div>
<?php
}
?>

        </div>
    </div>
</div>

<h1 class="title-gatti text-center mt-4 mb-4">
    Cibo per gatti
</h1>

<div class="container">
    <div class="row d-flex justify-content-center text-center">
    <?php
foreach ($foodCats as $product) {

?>
    <div class="product-card col-md-2 p-4 ">
        <div class="card h-100">
            <img src="<?php echo ($product->image) ?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo ($product->title) ?></h5>
                <p class="card-text"> <?php echo ($product->price) ?> €</p>
                <p class="description"> <?php echo ($product->description)?></p>
            </div>
        </div>
    </div>
<?php
}
?>

        </div>
    </div>
</div>


<h1 class="title-games text-center mt-4">
    Giochi per gatti
</h1>

<div class="container">
    <div class="row d-flex justify-content-center text-center">
    <?php
foreach ($gamesCats as $product) {

?>
    <div class="product-card col-md-2 p-4 ">
        <div class="card h-100">
            <img src="<?php echo ($product->image) ?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo ($product->title) ?></h5>
                <p class="card-text"> <?php echo ($product->price) ?> €</p>
                <p class="description"><?php echo ($product->description)?></p>
            </div>
        </div>
    </div>
<?php
}
?>

        </div>
    </div>
</div>

<h1 class="title-kennels text-center mt-4">
    Cucce per gatti
</h1>

<div class="container">
    <div class="row d-flex justify-content-center text-center">
    <?php
foreach ($kennelsCats as $product) {

?>
    <div class="product-card col-md-2 p-3 ">
        <div class="card h-100">
            <img src="<?php echo ($product->image) ?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo ($product->title) ?></h5>
                <p class="card-text"><?php echo ($product->price) ?> €</p>
                <p class="description"><?php echo ($product->description)?></p>
            </div>
        </div>
    </div>
<?php
}
?>

        </div>
    </div>
</div>



</main>

</body>
</html>