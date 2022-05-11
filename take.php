<?php

$data = file_get_contents("https://github.com/YanikFatih");

preg_match_all('<span class="text-bold color-fg-default">2</span>(.*?) (.*?)followers@si', $data, $dlinktake);

echo "<pre>";
print_r($dlinktake);
echo "</pre>";
echo "<br>";

echo $total = $dlinktake[2][0];

?>