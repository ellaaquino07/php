<?php

$dream_destination = array("Netherlands" => "Amsterdam", "Thailand" => "Bangkok", "Brazil" => "Rio de Janeiro","Russia" => "Moscow","Australia" => "Sydney");

print_r($dream_destination);
echo "<br>";

asort($dream_destination);
print_r($dream_destination);
echo "<br>";

ksort($dream_destination);
print_r($dream_destination);
echo "<br>";

?>