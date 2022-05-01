<?php

class Course
{
    private $name;
    private $category;
    private $description;

    public function connection()
    {
        $pdo = new PDO();
        return $pdo;
    }

    public function createCategory()
    {
        $this->connection()->insert($this->category);
    }

    public function createCourse()
    {
        $this->connection()->insert($this->name);
    }
}

/**
 * Essa classe esta em disacordo com o SRP devido que a mesma tem varias responsabilidades
 * como: Conectar ao banco de dados, criar categoria, criar curso, persistir os dados no banco
 */