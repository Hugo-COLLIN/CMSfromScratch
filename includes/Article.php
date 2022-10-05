<?php
class Article
{
    public function fetch_all()
    {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM Articles");
        $query->execute();

        return $query->fetchAll();
    }

    public function fetch_data($art_id)
    {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM Articles WHERE art_id = ?");
        $query->bindValue(1, $art_id);
        $query->execute();

        return $query->fetch();
    }
}