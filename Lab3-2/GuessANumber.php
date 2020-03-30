<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess a Number</title>
</head>

<body>
    <?php
    if (array_key_exists('randomResult', $_GET)) {
        $randomResult = $_GET['randomResult'];
    } else {
        srand((float) microtime() * 10000000);
        $randomResult = rand(1, 100);
    }

    if (array_key_exists('guess', $_GET)) {
        $count = $_GET['count'];
        $guess = $_GET['guess'];
        if ($randomResult > $guess) {
            print("<p>Wrong, please try a higher number. You have guess $count</p>");
        } else if ($randomResult < $guess) {
            print("<p>Wrong, please try a smaller number. You have guess $count</p>");
        } else {
            print("<p>CONGRATULATION, answer is $randomResult. You have guess $count</p>");
        }
        $count++;
    } else {
        $count = 1;
        $guess = '';
    }
    ?>


    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <input type="text" name="randomResult" value="<?php echo $randomResult ?>" style="display: none;">
        <input type="text" name="count" value="<?php echo $count ?>" style="display: none;">
        <table>
            <tr>
                <td>Your guess:</td>
                <td>
                    <input type="text" name="guess" value="<?php echo $guess; ?>">
                </td>
            </tr>
            <?php if ($guess !== '') : ?>
                <tr>
                    <td>
                        <?php
                        if (is_numeric($guess)) {
                            if ($guess == $result) {
                                echo "You are correct!";
                            } elseif ($guess < $result) {
                                echo "Wrong. Please try a higher number!";
                            } else {
                                echo "Wrong. Please try a lower number!";
                            }
                        } else {
                            echo "You must enter a number!";
                        }
                        ?>
                    </td>
                </tr>
            <?php endif; ?>
            <tr>
                <td align="right">
                    <input type="submit" value="Submit">
                </td>
                <td align="left">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>