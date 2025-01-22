<?php

class HeroRepository extends AbstractRepository
{

    public function findAll(): array
    {
        $sql = "SELECT * FROM hero";
        $stmt = $this->pdo->query($sql);
        $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!$datas) {
            header("Location: ../home.php");
            exit;
        }

        $heros = [];

        foreach ($datas as $data) {
            $heros[] = HeroMapper::convertirEnInstance($data);
        }

        return $heros;
    }

    /**
     * Cette fonction verifie si unhero avec un nom en particulier existe. si c'est le cas il le retourne, sinon il retourne null
     */
    public function findHeroByName(string $name): ?Hero
    {

        $sql = "SELECT * FROM hero WHERE user_name = :name";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":name", $name);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$data) {
            return null;
        }

        return HeroMapper::convertirEnInstance($data);
    }


    public function createHero(Hero $hero): ?Hero
    {

        $sql = "INSERT INTO hero (user_name, pv, url_img) VALUES (:user_name, :pv, :url_img)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':user_name', $hero->getName());
        $stmt->bindValue(':pv', $hero->getPv());
        $stmt->bindValue(':url_img', $hero->getUrl_img());
        $stmt->execute();

        $heroInstance = $this->findHeroByName($hero->getName());

        if (!$heroInstance) {
            return null;
        }

        return $heroInstance;
    }


    public function setHp(int $hp, string $name, int $coin){
        $sql = "UPDATE hero SET pv = :pv, coin = :coin WHERE user_name = :name";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':pv', $hp);
        $stmt->bindValue(':coin', $coin);
        $stmt->execute();
    }

}
