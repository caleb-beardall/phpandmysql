<?php
    try {
        $pdo = new PDO('mysql:host=mysql;dbname=jokesdb;charset=utf8mb4', 'jokesdbuser', 'jokesdbpassword');

        $sql = 'SELECT `joke_text` FROM `joke`';

        $result = $pdo->query($sql);

        foreach ($result as $row) {
            $jokes[] = $row['joke_text'];
        }
        
    } catch (PDOException $e) {
        $error = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
    }

    include __DIR__ . '/../templates/jokes.html.php';