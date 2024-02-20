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

    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        $command = 'curl -X GET -H "Authorization: Bearer ' . $token . '" http://' . $server . '/api/states/' . $name;

        $output = shell_exec($command);

        if(is_null($output)){
            echo 'error on query';
        }else{
            echo $output;

        }

    } else {
        echo "No name specified";
    }

} else {
    echo "API Token not added! ";
    echo "Please add it under " . "<a href='/token.php'>ADD TOKEN</a>";
}




?>