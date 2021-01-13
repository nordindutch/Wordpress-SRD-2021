<?php
header('Content-Type: application/json');
$the_json = file_get_contents("https://fantasticfrontier.beatenpath.nl/wp-content/themes/srd/json/generator-input.json");
echo $the_json;