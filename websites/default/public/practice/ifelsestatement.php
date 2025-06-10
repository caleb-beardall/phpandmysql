<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>If Else Statements</title>
</head>
<body>
    <p>
        <?php
            $roll1 = rand(1, 6);
            $roll2 = rand(1, 6);

            echo '<p>You rolled a '.$roll1.' and a '.$roll2.'</p>';

            if ($roll1 == 6 && $roll2 == 6) {
                echo '<p>You win!</p>';
            } else {
                echo '<p>Sorry, you didn\'t win. Better luck next time!</p>';
            }

            echo '<p>Thanks for playing</p>';
        ?>
    </p>
</body>
</html>