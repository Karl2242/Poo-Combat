<?php

class Monster
{

    // property
    private string $name;
    private int $pv;
    private string $url_img;

    // method magic
    public function __construct(string $name,int $pv,string $url_img) 
    {
        $this->name = $name;
        $this->pv = $pv;
        $this->url_img = $url_img;
    }

    // method custom
}
