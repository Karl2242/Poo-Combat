<?php
include_once "./utils/autoloader.php";


class item
{
private $id;
private $item_name;
private $price;
private $item_img;


public function getItem_name()
{
return $this->item_name;
}

public function getPrice()
{
return $this->price;
}

public function getItem_img()
{
return $this->item_img;
}


public function __construct(string $item_name, int $price, string $item_img)
{
    $this->item_name = $item_name;
    $this->price = $price;
    $this->item_img = $item_img;
}



}

?>