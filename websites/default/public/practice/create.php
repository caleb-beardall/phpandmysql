<?php
    try {
        $pdo = new PDO('mysql:host=mysql;dbname=jokesdb;charset=utf8mb4', 'jokesdbuser', 'jokesdbpassword');

        $sql = 'CREATE TABLE `joke` (
            `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `joke_text` TEXT,
            `joke_date` DATE
        ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';

        $pdo->exec($sql);

        $output = 'Joke table successfully created.';
        
    } catch (PDOException $e) {
        $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
    }

    include  __DIR__ . '/../templates/output.html.php';