<?php

    $products = [
        $food1 = new Products('https://arcaplanet.vtexassets.com/arquivos/ids/257857/stuzzy-monoprotein-agnello-.jpg?v=637588282248800000', 'Stuzzy Dog Monoprotein Lattina 400G', 'Disponibile', '2,99$'),
        $food2 = new Products('https://arcaplanet.vtexassets.com/arquivos/ids/280402/expecial-cane-bocconcini-pollo-e-anatra.jpg?v=638115354441900000', 'Expecial Dog Lattina 405G', 'Disponibile', '0,99$')
        $toys1 = new Products('')
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