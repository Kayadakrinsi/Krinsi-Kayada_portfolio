<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name1="Name";
    $name2="Name";
    $name3="Name";
    $rate1=5;
    $rate2=5;
    $rate3=5;
    $time1="Time";
    $time2="Time";
    $time3="Time";
    $message1="Message";
    $message2="Message";
    $message3="Message";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contact";
    $con = mysqli_connect($servername, $username, $password, $database);
    if (!$con) {
        die("Error : " . mysqli_connect_error());
    }
    $query = "SELECT * FROM `feedbacks` ORDER BY Serial_no DESC;";
    $result = $con->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name1 = $row["Name"];
        $rate1 = $row["Rate"];
        $message1=$row["Message"];
        $time1 = $row["SubmittedOn"];
        $row = $result->fetch_assoc();
        $name2 = $row["Name"];
        $rate2 = $row["Rate"];
        $message2=$row["Message"];
        $time2 = $row["SubmittedOn"];
        $row = $result->fetch_assoc();
        $name3 = $row["Name"];
        $rate3 = $row["Rate"];
        $message3=$row["Message"];
        $time3 = $row["SubmittedOn"];
    }
    ?>
</body>

</html>