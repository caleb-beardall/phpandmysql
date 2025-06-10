<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Name</title>
</head>
<body>
    <?php
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        echo 'Welcome to our website, ' . htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
    ?>
</body>
</html>