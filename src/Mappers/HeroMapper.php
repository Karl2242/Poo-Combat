<?php

class HeroMapper implements MapperContract
{
    public static function convertirEnInstance(array $donnee): Hero
    {

        return new Hero(
            $donnee["id"],
            $donnee["user_name"],
            $donnee["pv"],
            $donnee["url_img"],
            $donnee["coin"]
        );

    }
}
