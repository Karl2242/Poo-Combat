<?php

interface MapperContract
{
    public static function convertirEnInstance(array $donnee): object;
}