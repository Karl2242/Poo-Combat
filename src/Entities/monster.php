<?php

class Monster
{

    // property
    private string $name;
    private int $pv;
    private string $url_img;


    public function getName()
    {
        return $this->name;
    }

    public function getPV(): int
    {

        return $this->pv;
    }

    // method magic
    public function __construct(string $name, int $pv, string $url_img)
    {
        $this->name = $name;
        $this->pv = $pv;
        $this->url_img = $url_img;
    }

    public function changeHealth(int $pv): self
    {

        $this->pv = $pv;
        return $this;
    }



    // method custom
    public function hit(Hero $opposent): int
    {
    
$chiffreAleatoire = 0;

    if($this->getPv() > 0){

            $chiffreAleatoire = rand(6, 14);

    $opposent->changeHealth($opposent->getPV() - $chiffreAleatoire);    
}
return $chiffreAleatoire;

    }
}
