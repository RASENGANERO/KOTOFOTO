<?php
header('Content-Type: application/json');
require($_SERVER['DOCUMENT_ROOT'].'/databaseController/Database.php');

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $data = $_POST;
    $dbObject = new Database();
    $response = $dbObject->addMessage($data);
    echo json_encode($response);
}
?>