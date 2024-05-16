<?php

$students = [
    "id"        => 1,
    "name"      => "Ali",
    "class"     => "BSIT"
];

// echo "<pre>";
// print_r($students);
// echo "</pre>";



// Set the content type to application/json
header('Content-Type: application/json');

// Output the JSON encoded data
echo json_encode($students);

?>