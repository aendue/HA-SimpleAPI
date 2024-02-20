<?php
if(isset($_GET['ip']) AND isset($_GET['port'])) {
    $dir = 'data';
    $data = $_GET['ip'] . ":" . $_GET['port'];
    $ret = file_put_contents($dir.'/server.txt', $data);
    if($ret === false) {
        die('There was an error setting up');
    }
}
?>
<html>
<head>
    <title>Server</title>
    <style>
        body{
            font-family: Helvetica, Arial, sans-serif;
        }
        center{
            margin:40px 0;
        }
        h1{
            font-size: 30px;
            line-height: 26px;
            text-align: left;
        }
        p{
            font-size: 12px;
        }
        form{
            margin: 15px;
        }
    </style>
</head>
<body>
    <h1>Setup Home Assistant Server</h1>
    <?php
        $filename = 'data/server.txt';

        if (file_exists($filename)) {
            $server = file_get_contents($filename);
            echo "$server";
        }else{
            echo "homeassistant.local:8123";

        }
    ?>
    <form>
        <form action="server.php" method="post">
        <label for="IP">IP</label>
        <input name="ip" type="text" />
        <label for="Port">Port</label>
        <input name="port" type="text" />
        <input type="submit" name="submit" value="Save">
    </form>
    <a href="index.html"><button>Home</button></a>

</body>
</html>