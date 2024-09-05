<?php

class Product
{
    public $name;
    public $brand;
    public $category;
    public $price;
    public $package_weight;
    public $parcel_box;
    public $is_fragile;
    public $image_url;

    function __construct(string $_name, string $_brand, Category $_category, float $_price, float $_package_weight, ParcelBox $_parcel_box, bool $_is_fragile)
    {
        $this->name = $_name;
        $this->brand = $_brand;
        $this->category = $_category;
        $this->price = $_price;
        $this->package_weight = $_package_weight;
        $this->parcel_box = $_parcel_box;
        $this->is_fragile = $_is_fragile;
    }

    public function setImageUrl(string $_image_url)
    {
        $this->image_url = $_image_url;
    }

    public function getImageUrl()
    {
        return $this->image_url;
    }

    public function printPrice()
    {
        echo number_format($this->price, 2, ',', '');
    }
}
