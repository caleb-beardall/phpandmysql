<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For Loop</title>
</head>
<body>
    <p>
        <?php
            for ($count = 1; $count <= 10; $count++) {
                
                $roll = rand(1, 6);
                
                echo '<p>You rolled a '.$roll.'</p>';

                if ($roll == 6) {
                    echo '<p>You win!</p>';
                } else {
                    echo '<p>Sorry, you didn\'t win. Better luck next time!</p>';
                }
            }

            echo '<p>Thanks for playing</p>';
        ?>
    </p>
</body>
</html>