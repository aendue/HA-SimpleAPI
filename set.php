  GNU nano 7.2                                                                         set.php
<?php

$tokenpath = 'data/token.txt';
$serverpath = 'data/server.txt';

if (file_exists($serverpath)) {
    $server = file_get_contents($serverpath);
}else{
    $server = 'homeassistant.local:8123';
}

if (file_exists($tokenpath)) {
    $token = file_get_contents($tokenpath);


    if (isset($_GET['entity']) || isset($_GET['cmd'])){
        $entity = $_GET['entity'];
        $cmd = $_GET['cmd'];

        $command = 'curl -X POST -H "Authorization: Bearer ' . $token . '" -H "Content-Type: application/json"  -d \'{"entity_id":"' . $entity . '"}\' http://' . $server . '/ap>


        $output = shell_exec($command);

        if ($output == "[]"){
            echo "OK";
        }else{
            echo $output;
        }

    } else {
        echo "Entity or Command not specified";
    }

} else {
    echo "API Token not added! ";
    echo "Please add it under " . "<a href='/token.html'>ADD TOKEN</a>";
}


?>