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
        }else {
            $normal = str_replace(":", ",", $output);
            $normal = str_replace(['"', '{', '}'], "", $normal);
            $values = explode(",", $normal);

            for ($key = 0, $size = count($values); $key < $size; $key++) {
                if ($values[$key] == "message"){
                    echo $values[$key + 1];
                }
                if ($values[$key] == "state"){
                    $next_value = $values[$key + 1];
                    echo "$next_value";
                }
            }
        }


    } else {
        echo "No name specified";
    }

} else {
    echo "API Token not added! ";
    echo "Please add it under " . "<a href='/token.php'>ADD TOKEN</a>";
}
?>