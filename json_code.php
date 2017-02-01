<?php

//header('Content-Type: application/json');

/* random comment */
require_once('StudentDB.php');

$json_data = json_decode('{"first_name" : "Dale"}');

var_dump($json_data);

?>