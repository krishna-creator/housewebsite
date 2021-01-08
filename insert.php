<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nm=$_POST["nm"];
    $em=$_POST["gm"];
    $mb=$_POST["mb"];
    $cd=$_POST["cd"];

    mysql_connect("localhost","root","");
    mysql_select_db("testing");
    mysql_query("insert into test values('$nm','$em','$mb','$cd')");
    ?>
</body>
</html>