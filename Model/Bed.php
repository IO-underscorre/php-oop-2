<?php

class Bed extends Product
{
    public $size;
    public $is_covered;

    function __construct(string $_name, string $_brand, Category $_category, float $_price, float $_package_weight, ParcelBox $_parcel_box, bool $_is_fragile, string $_size, bool $_is_covered)
    {
        parent::__construct($_name, $_brand, $_category, $_price, $_package_weight, $_parcel_box, $_is_fragile);

        $this->size = $_size;
        $this->is_covered = $_is_covered;
    }
}
