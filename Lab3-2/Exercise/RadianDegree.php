<html>

<head>
    <title>Converter</title>
</head>

<body>
    <?php
    if (array_key_exists('mode', $_GET)) {
        $mode = $_GET['mode'];
    } else {
        $mode = 0;
    }
    if (array_key_exists('val', $_GET)) {
        $val = $_GET['val'];
    } else {
        $val = 0;
    }
    if (is_numeric($val)) {
        if ($mode == 0) {
            $result = radianToDegree($val);
        } else {
            $result = degreeToRadian($val);
        }
    } else {
        $result = '';
    }
    ?>



    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

        <table>
            <tr>
                <td>Mode: </td>
                <td>
                    <input type="radio" name="mode" value="0">Radian To Degree

                    <input type="radio" name="mode" value="1">Degree To Radian
                </td>
            </tr>
            <tr>
                <td>Value: </td>
                <td>
                    <input type="text" name="val">
                </td>
            </tr>
            <tr></tr>
            <tr>
                <td align="right">
                    <input type="submit" value="Submit">
                </td>
                <td align="left">
                    <input type="reset" value="Reset">
                </td>
            </tr>
            <tr>
                <?php
                if ($result != '')
                    print "<p>Result is $result<p>"
                ?>
            </tr>
        </table>

    </form>
</body>

</html>

<?php
function radianToDegree($val){
    return $val * 180/M_PI;    
}

function degreeToRadian($val){
    return $val * M_PI/180;
}
?>