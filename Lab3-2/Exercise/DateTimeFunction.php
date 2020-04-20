<!DOCTYPE html>
<html>
<head>
    <title>DateTimeFunction</title>
</head>

<body>
    <?php
    $keys = array('name1', 'name2', 'birthDay1', 'birthDay2');
    foreach ($keys as $key) {
        if (array_key_exists($key, $_GET)) {
            $$key = $_GET[$key];
        } else {
            $$key = '';
        }
    }

    $bd1 = myGetDate($birthDay1);
    $bd2 = myGetDate($birthDay2);
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <table>
            <tr>
                <td>Name of first person:</td>
                <td>
                    <input type="text" name="name1">
                </td>
            </tr>
            <tr>
                <td>Birthday of first person:</td>
                <td>
                    <input type="date" name="birthDay1">
                </td>
            </tr>

            <tr>
                <td>Name of second person:</td>
                <td>
                    <input type="text" name="name2">
                </td>
            </tr>
            <tr>
                <td>Birthday of second person:</td>
                <td>
                    <input type="date" name="birthDay2">

                </td>
            </tr>
            <tr>
                <td><input align="left" type="submit" value="Submit"></td>
                <td><input align="right" type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>

</body>
<?php
if ($name1 && $bd1 && $name2 && $bd2) {
    displayResult($name1, $bd1);
    displayResult($name2, $bd2);
    $dayDiff = getDayDif($bd1, $bd2);
    $yearDiff = getYearDif($bd1, $bd2);
    echo "<br>Different in days: $dayDiff";
    echo "<br>Different in years: $yearDiff";
} else {
    echo "Invalid date";
}
?>

</html>
<?php
function myGetDate($date_string){
    try {
        if ($date_string == '') {
            return NULL;            
        }
        return date_create($date_string);        
    } catch (Exception $e) {
            return NULL;            
    }       
}

function getDayDif($birthDay1, $birthDay2){
    $diff = date_diff($birthDay1, $birthDay2);
    return $diff->format("%R%a days");
}

function getYearDif($birthDay1, $birthDay2){
    $diff = date_diff($birthDay1, $birthDay2);
    return $diff->format("%R%y years");
}

function getAgeValue($date){
    $diff = date_diff(date_create(), $date);
    return $diff->format("%y");
}

function displayResult($name, $date){
    $date_string = date_format($date, "l, F j, Y");
    $age = getAgeValue($date);
    echo "<br>$name: $date_string - $age years old";
}

?>