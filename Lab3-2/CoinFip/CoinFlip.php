<html>

<head>
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