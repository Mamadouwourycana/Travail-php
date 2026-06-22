<?php

$produits = [
    [
        "nom" => "PC Portable",
        "prix" => 350000
    ],
    [
        "nom" => "Téléphone",
        "prix" => 150000
    ]
];

foreach ($produits as $produit) {

    $ttc = $produit["prix"] * 1.18;

    echo "Nom : " . $produit["nom"] . "\n";
    echo "Prix : " . $produit["prix"] . "\n";
    echo "Prix TTC : " . $ttc . "\n\n";
}

?>