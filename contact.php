<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $database="contact";
    $con=mysqli_connect($servername,$username,$password,$database);
    if(!$con){
        die("Error : ".mysqli_connect_error());
    }
    if(isset($_POST['submitc'])){
        $name=$_POST["namec"];
        $email=$_POST["emailc"];
        $phone=$_POST["phonec"];
        $message=$_POST["messagec"];
        $sql="insert into contacts(Name,Email,Phone,Message) values('$name','$email','$phone','$message')";
        if(mysqli_query($con,$sql)){
            echo "<script> alert('Thanks for visiting😍 \n Will reply as soon as possible.')</script>";
        }
        else{
            echo "error:".mysqli_error($con);
        }
        mysqli_close($con);
    }
?>
</body>
</html>


