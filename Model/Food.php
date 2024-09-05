<?php

class Food extends Product
{
    public $ingredients = [];

    function __construct(string $_name, string $_brand, Category $_category, float $_price, float $_package_weight, ParcelBox $_parcel_box, bool $_is_fragile, $_ingredients)
    {
        parent::__construct($_name, $_brand, $_category, $_price, $_package_weight, $_parcel_box, $_is_fragile);

        $this->ingredients = $_ingredients;
    }
}
