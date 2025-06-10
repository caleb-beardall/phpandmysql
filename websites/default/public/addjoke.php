<?php
if (isset($_POST['joketext'])) {
    try {
        include __DIR__ . '/../includes/DatabaseConnection.php';
        include __DIR__ . '/../includes/DatabaseFunctions.php';

        /* For now, all jokes will have 1 set as the `author_id`
        Once I've updated this project to handle logins, I'll update
        this section to submit the author's ID. */
        insertJoke($pdo, $_POST['joketext'], 1);

        header('location: jokes.php');

    } catch (PDOException $e) {
        $title = 'An error has occurred';

        $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
    }
} else {
    $title = 'Add a new joke';

    ob_start();

    include  __DIR__ . '/../templates/addjoke.html.php';

    $output = ob_get_clean();
}

include  __DIR__ . '/../templates/layout.html.php';