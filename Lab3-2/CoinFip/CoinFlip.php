<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coin flip</title>
</head>

<body>
    <font size="4" color="blue">Please pick head or tails!</font>
    <form action="./HeadOrTail.php" method="post">
        <?php
        print '<input type="radio" name="pick" value="1"> Tail';
        print '<input type="radio" name="pick" value="0"> Head';
        print '<br />'
        ?>
        <input type="submit" value="Submit">
        <input type="reset" value="Restart">

    </form>
</body>

</html>