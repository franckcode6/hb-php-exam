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

echo '<table>
    <tr>
        <th></th>
        <th>Nom</th>
        <th>Prix (en euros)</th>
        <th>Nombre en stock</th>
    </tr>';

foreach ($shoes as $shoe) {
    if ($shoe['price'] > 100) {
        $exclamPoint = "!";
    } else {
        $exclamPoint = ' ';
    }


    echo '<tr>
            <td>'.$exclamPoint.'</td>
            <td>'.$shoe['name'].'</td>
            <td>'.number_format($shoe['price'], 2, ',', ' ').'€</td>
            <td>'.$shoe['stock'].' en stock</td>';
    '</tr>
    </table>';
}
