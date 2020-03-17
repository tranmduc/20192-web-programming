<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> Coin Flips! </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <font size=4 color="blue">Please pick Heads or Tails! </font> 
        
        <form action="GotFlip.php" method="POST">
            <?php
                print "<INPUT TYPE=\"radio\" NAME=\"pick\" VALUE=0 > Heads";
                print "<INPUT TYPE=\"radio\" NAME=\"pick\" VALUE=1 > Tails";
                print "<BR>";
            ?>
            <input type="SUBMIT" value="Submit">
            <input type="RESET" value="Reset">
        </form> 
    </body>
</html>


