<?php


class ItemMapper implements MapperContract
{
public static function convertirEnInstance($donnee): array
{

$tableau = [];


$tableau[] = new item (
 $donnee['id'],
 $donnee['item_name'],
 $donnee['name'],
 $donnee['item_img']
);

return $tableau;
}


}


?>