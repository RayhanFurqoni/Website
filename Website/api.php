<?php
    header("Access-Control-Allow-Origin: *");
    $dbh = new PDO('mysql:host=localhost;dbname=get_test', 'root', '');
    $db = $dbh->prepare('SELECT * FROM data');
    $db->execute();
    $result = $db->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($result);  
    echo $json;

?>