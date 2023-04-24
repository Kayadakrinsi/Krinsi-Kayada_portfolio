<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contact";
    $con = mysqli_connect($servername, $username, $password, $database);
    if (!$con) {
        die("Error : " . mysqli_connect_error());
    }
    if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $rate = $_POST["rate"];
        $message = $_POST["message"];
        $sql = "insert into feedbacks(Name,Email,Rate,Message) values('$name','$email','$rate','$message')";
        if (mysqli_query($con, $sql)) {
            echo "<script> alert('Your feedback has been recorded! \n Thanks for the feedback😍')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        } else {
            echo "error:" . mysqli_error($con);
        }
    }
    mysqli_close($con);
    ?>
</body>
</html>