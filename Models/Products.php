<?php

    $products = [
        $food1 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/257857/stuzzy-monoprotein-agnello-.jpg?v=637588282248800000', 'Stuzzy Dog Monoprotein Lattina 400G', 'Disponibile', '2,99$'),
        $food2 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/280402/expecial-cane-bocconcini-pollo-e-anatra.jpg?v=638115354441900000', 'Expecial Dog Lattina 405G', 'Disponibile', '0,99$'),
        $toys1 = new Toys('https://arcaplanet.vtexassets.com/arquivos/ids/218063/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-cane-in-tessuto-peluche-tric78.jpg?v=637454594866330000', 'Gioco per Cane in Stoffa Peluche con Squittio', 'Non Disponibile', '5,99$'),
        $toys2 = new Toys('https://arcaplanet.vtexassets.com/arquivos/ids/209753/YES--pallina-in-corda-65cm.jpg?v=637413991274900000', 'Gioco Cane Pallina con Corda', 'Disponibile', '2,10$'),
        $kennels1 = new Kennels('https://arcaplanet.vtexassets.com/arquivos/ids/280979/LT_CIAMB-PELOSA-CM-60_10141039--1-.jpg?v=638122241255970000', 'Cuccia Ciambella Pelosa per Cane 60CM', 'Disponibile', '6,90$'),
        $kennels2 = new Kennels('https://arcaplanet.vtexassets.com/arquivos/ids/225622/p-a-y--canile-eco-lodge-medium.jpg?v=637454754161230000', 'Cuccia esterna per Cani Eco Lodge', 'Non Disponibile', '69,99$')
    ];



    class Products {
        public $image;
        public $name;
        public $amount;
        public $price;

        public function __construct($immagine, $nome, $quantita, $prezzo){
            $this->image = $immagine;
            $this->name = $nome;
            $this->amount = $quantita;
            $this->price = $prezzo;
        }
    }

    class Food extends Products {
        public $type;
    }

    class Toys extends Products {
        public $type;
    }

    class Kennels extends Products {
        public $type;
    }
?>