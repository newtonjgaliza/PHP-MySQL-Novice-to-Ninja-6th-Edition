<!DOCTYPE html>
<html>
    <head>
        <title>DiceRoll</title>
    </head>
    <body>
        <?php

            for ($count = 1; $count <= 10; $count++)
            {
                $roll = rand(2,6);
            
                echo '<p>You rolled a '. $roll . '</p>';

                if ($roll == 6)
                {
                    echo '<p>You win!</p>';
                }
                else
                {
                    echo '<p>Sorry, you didn\'t win, better luck next time!</p>';
                }

                echo "Thanks for playing!";
            }
        ?>
    </body>

</html>