<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="jokes.css">
        <title><?=$title?></title>
    </head>
    <body>
        <header>
            <h1>Internet Joke Database</h>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="jokes.php">Jokes List</a></li>
                <li><a href="addjoke.php">Add a new Joke</a></li>
            </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
        <?php include __DIR__ . '/../templates/footer.html.php'; ?>
    </body>
</html>