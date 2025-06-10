<?php
    try {
        $pdo = new PDO('mysql:host=mysql;dbname=jokesdb;charset=utf8mb4', 'jokesdbuser', 'jokesdbpassword');
        
        $output = 'Database connection established.';
        
    } catch (PDOException $e) {
        $output = 'Unable to connect to the database server: ' . $e->getMessage();
    }

    include __DIR__ . '/../templates/output.html.php';