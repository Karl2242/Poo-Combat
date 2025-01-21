<?php


class Hero
{
    private int $id;
    private string $name;
    private int $pv;
    private string $url_img;


    public function __construct(int $id, string $name, int $pv, string $url_img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->pv = $pv;
        $this->url_img = $url_img;
    }


    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of pv
     */
    public function getPv(): int
    {
        return $this->pv;
    }


    public function changeHealth(int $pv): self
    {

        $this->pv = $pv;
        return $this;
    }

    /**
     * Get the value of url_img
     */
    public function getUrl_img(): string
    {
        return $this->url_img;
    }



    public function direSonNom(): void
    {
        var_dump("je m'appelle " . $this->name . " le sang");
    }


    public function hit(Monster $opposent): int
    {

            if($this->getPv() < 0){
                $this->changeHealth(0);
            }
            elseif($this->getPv() > 0){

                $chiffreAleatoire = rand(8, 15);

        $opposent->changeHealth($opposent->getPV() - $chiffreAleatoire);
        
        return $chiffreAleatoire;
            }

    
    }
}
