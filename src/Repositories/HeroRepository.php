<?php

class HeroRepository extends AbstractRepository {


public function verifyHero($name){

$sql = "SELECT * FROM hero WHERE user_name = :name";
$stmt = $this->pdo->prepare($sql);
$stmt->bindValue(":name", $name);
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$data){
    return true;
}

session_start();
$_SESSION["name"] = $data["user_name"];
$_SESSION["pv"] = $data["pv"];
$_SESSION["img"] = $data["url_img"];




$this->getHero($name);
return false;
}


public function createHero(string $name, $pv = 100, $url_img = "./assets/image/hero.png") {

   $sql = "INSERT INTO hero (user_name, pv, url_img) VALUES (:name, :pv, :url_img)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':pv', $pv);
        $stmt->bindValue(':url_img', $url_img);
        $stmt->execute();
        //$this->getHero($name);
        $heroInstance = self::getHero($name);
session_start();
$_SESSION["name"] = $name; 
$_SESSION["pv"] = $pv;
$_SESSION["img"] = $url_img;



        return $heroInstance;
    }



    public function getHero($name) {


        $sql = "SELECT * FROM hero WHERE user_name = :name";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->execute();
        $utilisateurEnFormeData =  $stmt->fetch();
        if(!$utilisateurEnFormeData){
            return ;
        }
        $monHeroMapper = new HeroMapper;

        return $monHeroMapper->convertirEnInstance($utilisateurEnFormeData);

    }



}

?>