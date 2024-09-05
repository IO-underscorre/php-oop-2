<?php

class ParcelBox
{
    public $name;
    public $box_dimensions = [];

    function __construct(string $_name, $_box_dimensions)
    {
        $this->name = $_name;
        $this->box_dimensions = $_box_dimensions;
    }
}
