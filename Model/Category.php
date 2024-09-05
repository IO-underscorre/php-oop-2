<?php

class Category
{
    public $species;
    public $description;

    function __construct(string $_species, string $_description = NULL)
    {
        $this->species = $_species;
        $this->description = $_description;
    }

    public function setDescription(string $_description)
    {
        $this->description = $_description;
    }
}
