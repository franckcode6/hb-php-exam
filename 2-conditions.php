<?php

$shoes = [
    [
        'name'  => 'Heracles air max ++',
        'price' => 120.50,
        'stock' => 12,
    ],
    [
        'name'  => 'Zeus de chantier',
        'price' => 115.32,
        'stock' => 75,
    ],
    [
        'name'  => 'Hermes ultra fast',
        'price' => 75,
        'stock' => 5,
    ],
    [
        'name'  => 'Poseidon étanches',
        'price' => 58.25,
        'stock' => 40,
    ],
    [
        'name'  => 'Hadès méga-dark',
        'price' => 55.12,
        'stock' => 32,
    ],
];

foreach ($shoes as $shoe) {
    if ($shoe['price'] > 100) {
        $exclamPoint = "!";
    } else {
        $exclamPoint = ' ';
    }

    echo ''.$exclamPoint.''.$shoe['name'].''.number_format($shoe['price'], 2, ',', ' ').'€</td>'.$shoe['stock'].' en stock </br></br>';
}
