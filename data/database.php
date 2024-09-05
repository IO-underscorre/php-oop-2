<?php

require_once __DIR__ . '/../Model/Product.php';
require_once __DIR__ . '/../Model/ParcelBox.php';
require_once __DIR__ . '/../Model/Category.php';
require_once __DIR__ . '/../Model/Toy.php';
require_once __DIR__ . '/../Model/Bed.php';
require_once __DIR__ . '/../Model/Food.php';


$boxes = [
    new ParcelBox('XS', [30, 20, 5]),
    new ParcelBox('S', [45, 35, 15]),
    new ParcelBox('M', [45, 40, 40]),
    new ParcelBox('L', [50, 50, 50]),
    new ParcelBox('XL', [70, 60, 60])
];

$categories = [
    new Category('Cat'),
    new Category('Dog')
];

$products = [
    new Food('Pro Plan - Chicken', 'Purina', $categories[1], 2.49, 500, $boxes[1], false, ['Chicken', 'Wheat', 'Poultry protein', 'Mais', 'Rice']),
    new Food('Pro Plan - Beef', 'Purina', $categories[1], 2.49, 500, $boxes[1], false, ['Beef', 'Wheat', 'Poultry protein', 'Mais', 'Rice']),
    new Food('Cat snacks - Catnip', 'Catisfactions', $categories[0], 8.99, 60, $boxes[0], false, ['Cereals', 'Oils', 'Vegetal protein', 'By-products of vegetable origin']),
    new Toy('Electric Toy Fish', 'BangShou', $categories[0], 7.49, 200, $boxes[1], false, ['Cloth', 'Plastic'], true),
    new Toy('Ultra Squeaker Ball - M', 'Chuckit!', $categories[1], 4.99, 200, $boxes[1], false, ['Gum'], true),
    new Bed('Waterproof indoor bed', 'EHEYCIGA', $categories[1], 49.99, 3750, $boxes[4], false, 'L', false),
    new Bed('Indoor padded tent-style dome kennel', 'WINDRACING', $categories[0], 25.99, 900, $boxes[4], false, 'M', true)
];
