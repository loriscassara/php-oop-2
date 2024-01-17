<?php
require __DIR__ . '/Models/Products.php';

$products = [
    new Products(
        "Cane",
        "Zampe tiragraffi",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRr9tUXwewMarvAodXWTgI1ZHlu_AIL4XA4T3Wo8b3uShp6Y1W_",
        "26,84$"
    ),
    new Foods(
        "Gatto",
        "Cibo umido per Gatti con Pollo e Manzo",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4lUSIHWrW3EE-AioP50G-qWMUiqBPUgGrwjxZVR18IwmIXSNB",
        "0,90$",
        "85g",
        "Gourmet"
    ),
    new Kennels(
        "Cane",
        "Cuccia Cane Interno Taglia Media",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCGdLFsHUEViB7nXd1OWlLgQUexhwl0b_xUGo3RXvnfv1EN2DB",
        "64,99$",
        "Taglia Media",
        "Eheyciga"
    ),
    new Toys(
        "Cane",
        "Corda da gioco",
        "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQFi0cCD05bIA0lkJ8L1UIvSUPtd0hzzyBipH-OGXBVHECfoAXH",
        "2,99$",
        "Tutte le grandezze",
        "Trixie"
    ),
    new Products(
        "Gatto",
        "Ciotole per Gatti",
        "https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQgKmWUY8qW9l0OF9xnpVf2LfgqvN63JjD-m4Ewc9bIC-A20lGR",
        "27,99$"
    ),
    new Foods(
        "Cane",
        "Cibo cani adulti con prosciutto crudo",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTBKotj9hhWLk1PM458LilEa7CTMQ65oQtBcxfFmeyLcJOHMao",
        "40,84$",
        "12kg",
        "Trainer"
    )
];
