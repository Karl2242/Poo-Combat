<?php

class HeroMapper {


    public function convertirEnInstance($donnee) {

        $monHero = new Hero($donnee["user_name"],$donnee["pv"],$donnee["url_img"],$donnee["id"]);
        $_SESSION["hero"] = $monHero;

        return $monHero;
    }

}

