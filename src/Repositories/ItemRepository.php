<?php

class itemRepository extends AbstractRepository
{

public function findItem(){
    $sql = "SELECT * FROM item";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $datas;
}


public function buyItem($userId, $itemId)
{
$sql = "INSERT INTO hero_item (item_id, hero_id) VALUES (:userId, itemId)";
$stmt = $this->pdo->prepare($sql);
$stmt->bindValue(":userid", $userId);
$stmt->bindValue(":itemid", $itemId);
$stmt->execute();
}


}

?>