<?php
    try {
        $pdo = new PDO('mysql:host=mysql;dbname=jokesdb;charset=utf8mb4', 'jokesdbuser', 'jokesdbpassword');

        $sql = 'UPDATE `joke` SET `joke_date` = "2025-06-03"
            WHERE `joke_text` LIKE "%programmer%"';

        $affectedRows = $pdo->exec($sql);

        $output = 'Updated ' . $affectedRows . ' rows.';
        
    } catch (PDOException $e) {
        $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
    }

    include __DIR__ . '/../templates/output.html.php';