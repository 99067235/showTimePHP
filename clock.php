<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>clock</title>
</head>
<body>
    <?php
    date_default_timezone_set("Europe/Amsterdam");
    $time = date("H:i ");
    $hour = date("H");
    if ($time < "12") {
        echo "<center>Goede morgen!</center>";
        echo  "<center>Het is nu $time</center>";
        ?>
        <body style="
        background: url(images/morning.png);
        background-size: cover;
        background-attachment: fixed;
        ";></body>
    <?php
    } else
    if ($time >= "12" && $time < "17") {
        echo "<center>Goede middag!</center>";
        echo  "<center>Het is nu $time</center>";
        ?>
        <body style="
        background: url(images/afternoon.png);
        background-size: cover;
        background-attachment: fixed;
        ";></body>
    <?php
    } else
    if ($time >= "17" && $time < "19") {
        echo "<center>Goede avond!</center>";
        echo  "<center>Het is nu $time</center>";
        ?>
        <body style="
        background: url(images/evening.png);
        background-size: cover;
        background-attachment: fixed;
        ";></body>
    <?php
    } else
    if ($time >= "19") {
        echo "<center>Goede nacht!</center>";
        echo  "<center>Het is nu $time</center>";
        ?>
        <body style="
        background: url(images/night.png);
        background-size: cover;
        background-attachment: fixed;
        ";></body>
    <?php
    }
    ?>
</body>
</html>