<?php
 $dir = 'data';

if ( !file_exists($dir) ) {
    mkdir ($dir, 0744);
}

if(isset($_POST['token'])) {
    $data = $_POST['token'];
    $ret = file_put_contents($dir.'/token.txt', $data);
    if($ret === false) {
        die('There was an error writing this file');
    }
}
?>

<html>
<head>
    <title>Token</title>
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
    <h1>Setup Home Assistant Token</h1>
    <?php
        $filename = 'data/token.txt';

        if (file_exists($filename)) {
            echo "Token is set up.";
        }else{
            echo "No Token has been specified!";
        }
    ?>
    <form action="/token.php" method="post">
        <input name="token" type="text" />
        <input type="submit" name="submit" value="Speichern">
    </form>
    <a href="index.html"><button>Home</button></a>
</body>
</html>