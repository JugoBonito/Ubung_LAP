<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page</title>
</head>
  
<body>
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["nachname"]; ?>

<?php

$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="testphp";

$first_name = $_POST['name'];
$last_name = $_POST['nachname'];

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

    print_r($_POST);
    $sql = "INSERT INTO user (Vorname, Nachmittag) VALUES ('$first_name', '$last_name')";

    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

    $con->close();
    ?>
</body>
  
</html>