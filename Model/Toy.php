<?php

class Toy extends Product
{
    public $materials = [];
    public $is_electric;

    function __construct(string $_name, string $_brand, Category $_category, float $_price, float $_package_weight, ParcelBox $_parcel_box, bool $_is_fragile, $_materials, bool $_is_electric)
    {
        parent::__construct($_name, $_brand, $_category, $_price, $_package_weight, $_parcel_box, $_is_fragile);

        $this->materials = $_materials;
        $this->is_electric = $_is_electric;
    }
}
