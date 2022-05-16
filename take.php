<?php

$data = file_get_contents("https://github.com/YanikFatih");

preg_match_all('<span class="text-bold color-fg-default">2</span>(.*?) (.*?)"followers"@si', $data, $dlinktake);

//print_r($dlinktake);

$total = $dlinktake[2][0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Github Follower Count Tracker</title>
    <meta charset="UTF-8">
    <meta http_equiv="refresh" content="300;URL=take.php">
</head>
<body>
    <br>
    <br>
    <b style="font: size 400px;"><center><?php echo $total ?></center></b>

    <?php

    

    ?>

</body>
</html>