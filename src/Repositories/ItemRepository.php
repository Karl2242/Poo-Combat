<?php

class itemRepository extends AbstractRepository
{

public function findItem(){
    $sql = "SELECT * FROM item";
    $stmt = $this->pdo->query($sql);
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
}

}

?>