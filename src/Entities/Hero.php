<?php


class Hero {
    private string $name;
    private int $pv;
    private string $url_img;
    private int $id;


    public function __construct($name, $pv, $url_img, $id)
    {
        $this->name = $name;
        $this->pv = $pv;
        $this->url_img = $url_img;
        $this->id = $id;
    }

    public function direSonNom(){
        var_dump("je m'appelle " . $this->name . " le sang");
    }
}

?>