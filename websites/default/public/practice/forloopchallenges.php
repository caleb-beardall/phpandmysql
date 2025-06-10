<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For Loop Challenges</title>
</head>
<body>
    <p>
        <?php
            // Challenge 1: Print all the odd numbers from 21 to 99
            echo '<p>Challenge 1: Print all the odd numbers from 21 to 99</p>';
            
            for ($number = 21; $number <= 99; $number++) {
                
                if ($number % 2 == 1) {
                    echo '<p>'.$number.'</p>';
                }
            }

            // Challenge 2: Print the nine times table up to 12 x 9 (9, 18, 27, etc.) without using the multiplication operator (*) or an if statement
            echo '<p>Challenge 2: Print the nine times table up to 12 x 9 (9, 18, 27, etc.) without using the multiplication operator (*) or an if statement</p>';
            
            $result = 0;

            for ($number = 1; $number <= 12; $number++) {
                
                $result = $result + 9;

                echo '<p>'.$result.'</p>';
            }

            // Challenge 3: Print the nine times table in this format: 1 x 9 = 9
            echo '<p>Challenge 3: Print the nine times table in this format: 1 x 9 = 9</p>';

            $result = 0;

            for ($number = 1; $number <= 12; $number++) {
                
                $result = $result + 9;

                echo '<p>'.$number.' x 9 = '.$result.'</p>';
            }
        ?>
    </p>
</body>
</html>