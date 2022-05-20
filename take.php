<?php

$data = file_get_contents("https://github.com/YanikFatih");

preg_match_all('@<span class="text-bold color-fg-default">(.*?) (.*?)</span>@si', $data, $dlinktake);

//print_r($dlinktake);

$dlinktake[1][0];

$total = $dlinktake[1][0];

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

    $body = "<h1>PEOPLE FOLLOWED</h1>";

    //txt file reading op
    $file = "data.txt";
    $handle = fopen($file, "r");
    $content = fread($handle, filesize($file));

    $tolist = explode('', $content);
    fclose($handle);

    $follower = (int)end($tolist);

    //checking operations 

    if($follower > $total){    ?>
    
    <h1 style="font-size:100px; color:green;" ><center>NEW FOLLOWER!</center></h1>

    <audio src="follower.mp3" type="audio/mpeg">Your browser does not support the audio element</audio>

    <?php 
    //writing into txt file
    $file_h = fopen($file, 'w') or die("File could not open");
    $data = " ".trim($total);
    fwrite($file_h, $content.$data);
    fclose($file_h);

    
    ?>

</body>
</html>