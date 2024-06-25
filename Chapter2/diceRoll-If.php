<!DOCTYPE html>
<html>
    <head>
        <title>DiceRoll</title>
    </head>
    <body>
        <?php

        do {
            
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

        while ($roll != 6);

        ?>
    </body>

</html>