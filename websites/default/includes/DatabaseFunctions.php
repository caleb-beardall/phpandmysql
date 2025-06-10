<?php
function insertJoke($pdo, $joketext, $authorId) {
    $stmt = $pdo->prepare('INSERT INTO `joke` (`joke_text`, `joke_date`, `author_id`)
        VALUES (:joketext, :jokedate, :authorId)');

    $values = [
        ':joketext' => $joketext,
        ':authorId' => $authorId,
        ':jokedate' => date('Y-m-d')
    ];

    $stmt->execute($values);
}

function allJokes($pdo) {
    $stmt = $pdo->prepare('SELECT `joke`.`id`, `joke_text`, `author_name`, `author_email`
        FROM `joke` INNER JOIN `author`
            ON `author_id` = `author`.`id`');
    
    $stmt->execute();

    return $stmt->fetchAll();
}

function getJoke($pdo, $id) {
    $stmt = $pdo->prepare('SELECT * FROM `joke` WHERE `id` = :id');

    $values = [
        'id' => $id
    ];

    $stmt->execute($values);

    return $stmt->fetch();
}

function updateJoke($pdo, $jokeId, $joketext, $authorId) {
    $stmt = $pdo->prepare('UPDATE `joke` SET
            `author_id` = :authorId,
            `joke_text` = :joketext
        WHERE `id` = :id');
    
    $values = [
        ':joketext' => $joketext,
        ':authorId' => $authorId,
        ':id' => $jokeId
    ];

    $stmt->execute($values);
}

function deleteJoke($pdo, $id) {
    $stmt = $pdo->prepare('DELETE FROM `joke` WHERE `id` = :id');

    $values = [
        ':id' => $id
    ];

    $stmt->execute($values);
}

function totalJokes($database) {
    $stmt = $database->prepare('SELECT COUNT(*) FROM `joke`');
    $stmt->execute();

    $row = $stmt->fetch();

    return $row[0];
}