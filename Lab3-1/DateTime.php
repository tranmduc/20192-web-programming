<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datetime processing</title>
</head>

<body>
    <?php
    $keys = array('name', 'day', 'month', 'year', 'hour', 'minute', 'second');
    $isComplete = false;
    $keyCount = 0;
    $maxDay;

    foreach ($keys as $key) {
        if (array_key_exists($key, $_GET)) {
            if ($key == 'name') {
                $$key = $_GET[$key];
            } else {
                $$key = (int) $_GET[$key];
            }
            $keyCount++;
        } else {
            if ($key == 'name') {
                $$key = '';
            } else {
                $$key = 0;
            }
        }
    }

    if ($keyCount == 7)
        $is_completed = true;
    else {
        $is_completed = false;
        $count = 0;
    }

    function get_max_day($month, $year)
    {
        $is_leap = 0;
        if ($year % 4 == 0) {
            if ($year % 100 == 0) {
                if ($year % 400 == 0) {
                    $is_leap = 1;
                } else {
                    $is_leap = 0;
                }
            } else {
                $is_leap = 1;
            }
        }
        switch ($month) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                return 31;
            case 4:
            case 6:
            case 9:
            case 11:
                return 30;
            case 2:
                return 28 + $is_leap;
            default:
                return 0;
        }
    }

    $maxDay = get_max_day($month, $year) == 0 ? 31 : get_max_day($month, $year);

    function select_print($i, $selected)
    {
        if ($i == $selected) {
            echo "<option value=\"$i\" selected>$i</option>";
        } else {
            echo "<option value=\"$i\">$i</option>";
        }
    }

    function printDateForm($maxDay, $day, $month, $year)
    {
        print("<select name=\"day\">");
        for ($i = 1; $i <= $maxDay; $i++) {
            select_print($i, $day);
        }
        print("</select>");

        print("<select name=\"month\" onchange='submit()'>");
        for ($i = 1; $i <= 12; $i++) {
            select_print($i, $month);
        }
        print("</select>");

        print("<select name=\"year\" onchange='submit()'>");
        for ($i = 2000; $i <= 2050; $i++) {
            select_print($i, $year);
        }
        print("</select>");
    }

    function printTimeForm($hour, $minute, $second)
    {
        print("<select name=\"hour\">");
        for ($i = 1; $i <= 12; $i++) {
            select_print($i, $hour);
        }
        print("</select>");
        print("<select name=\"minute\">");
        for ($i = 00; $i < 60; $i++) {
            select_print($i, $minute);
        }
        print("</select>");
        print("<select name=\"second\">");
        for ($i = 0; $i < 60; $i++) {
            select_print($i, $second);
        }
        print("</select>");
    }
    ?>
    <p>Enter your name and select date and time for appointment</p>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
        <table>
            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" name="name" value="<?php echo $name ?>">
                </td>
            </tr>
            <tr>
                <td>Date:</td>
                <td>
                    <?php
                    printDateForm($maxDay, $day, $month, $year)
                    ?>
                </td>
            </tr>
            <tr>
                <td>Time:</td>
                <td>
                    <?php
                    printTimeForm($hour, $minute, $second)
                    ?>
                </td>
            </tr>
            <tr>
                <td><input align="left" type="submit" value="Submit"></td>
                <td><input align="right" type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>

    <?php if ($is_completed) : ?>
        <br>
        <br>
        <div>
            Hi <?php echo $name; ?> !
            <br>
            You have choosen to have an appointment on <?php echo date_format($date, "H:i:s d/m/Y"); ?>
            <br>
            <br>
            More information
            <br>
            <br>
            In 12 hours, the time and date is <?php echo date_format($date, "h:i:s A d/m/Y"); ?>
            <br>
            <br>
            This month has <?php echo $max_day; ?> days!
        </div>
    <?php endif; ?>
</body>

</html>