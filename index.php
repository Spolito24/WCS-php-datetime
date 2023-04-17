<?php
$presentTime = new \DateTime('now');
$destinationTime = new \DateTime('oct-21-2015 04:29');
$interval = $presentTime->diff($destinationTime);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        echo $presentTime->format('M-d-Y h:m'); ?><br>
        <?php echo $destinationTime->format('M-d-Y h:m'); ?><br>
        <?php echo $interval->format('l\'interval entre ' . $presentTime->format('M-d-Y h:m') . ' et ' . $destinationTime->format('M-d-Y h:m') . ' est de %R%Y an %m mois %d jours %h heures et %i minutes'); ?><br>

    </p>
</body>

</html>