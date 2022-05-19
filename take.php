<?php

$data = file_get_contents("https://github.com/YanikFatih");

preg_match_all('@<span class="text-bold color-fg-default">(.*?) (.*?)</span>@si', $data, $dlinktake);

//print_r($dlinktake);

echo $dlinktake[1][0];


//$total = $dlinktake[2][0];

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

    $body = "<h1>People Followed</h1>"

    //txt file reading op
    $file = "data.txt";
    $handle = fopen($file, "r");
    $content = fread($handle, filesize($file)); //...



    ?>

</body>
</html>