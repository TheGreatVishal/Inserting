<?php
    if(isset($_POST['Username'])){ 
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection to this database failed due to". mysqli_connect_error());
    }
    //echo "<br>";
    //echo "Success connecting the db";

    $Username = $_POST['Username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `my_user2`.`login_info` (`Username`, `Password`, `dt`) VALUES ('$Username', '$password', current_timestamp());";
    
    //echo $sql;

    if($con->query($sql) == true){
        echo "Successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con-> close();
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" id="Username" name="Username" placeholder="Enter Username"><br>
        <input type="text" id="password" name="password" placeholder="Enter Password"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>