<?php

abstract class VehicleBase {
    protected $name;
    protected $type;
    protected $price;
    protected $image;

    public function __construct($name, $type, $price, $image)
    {
        $this->name;
        $this->type;
        $this->price;
        $this->image;
    }

  abstract public function getDetails();

}
