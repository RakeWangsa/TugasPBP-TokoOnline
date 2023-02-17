<?php
$db_host='127.0.0.1:3308';
$db_database='tugaspbp';
$db_username='root';
$db_password='';

// connect database
$db = new mysqli($db_host, $db_username, $db_password, $db_database);
if ($db->connect_errno) {
    die ("Could not connect to the database : <br />". $db->connect_error);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>