<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0.5; url=index.html">
    <title>Document</title>
</head>
<body style="display:flex;justify-content:center;padding:50px">
    <?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $code=$_POST['code'];

    $conn=new mysqli('sql211.ezyro.com','ezyro_27307703','b770l4x9fepd','ezyro_27307703_testing');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("insert into test(name,email,mobile,code)
        values(?,?,?,?)");
        $stmt->bind_param("ssii",$name,$email,$mobile,$code);
        $stmt->execute();
        echo "sent successfully...";
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
