<form action="" method="post">
<input type="number" name="day" placeholder="day">
<input type="number" name="month" placeholder="month">
<input type="number" name="year" placeholder="year">
<input type="submit" value="OK" name="ok">
</form>

<?php

if (isset($_POST["ok"])) {
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $check = checkdate($month, $day, $year);
    if ($check == true) {
        echo "Your date of birth is: $day.$month.$year<br>";
        $weekday = JDDayOfWeek (GregorianToJD($month, $day, $year), 1);
        echo "You were born on $weekday";
    }
    else {
        echo "Date is wrong!";
    }
}