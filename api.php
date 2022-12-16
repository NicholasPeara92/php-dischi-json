<?php
$hotels = file_get_contents("dischi.json");

header("Content-Type: application/json");
echo $json_string;