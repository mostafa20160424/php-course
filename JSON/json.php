<?php
    $jsondata=file_get_contents('mydata.json');
    echo $jsondata;
    $json=json_decode($jsondata,true);
    echo $json['object']['address'][0];
?>
