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

}

?>