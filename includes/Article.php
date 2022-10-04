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
}