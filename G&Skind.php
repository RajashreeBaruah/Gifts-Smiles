<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gifts & Smiles | Donate | Kind</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 15px 30px;
            font-size: 17px;
            padding: 8px;
            text-align: center;
            background-color: lightgray;
        }
    </style>
</head>
<body>
	<br><br><br><br><br><br><br><br><br><br>
	<?php echo "Thank you ". $_POST["fname"]. " " . $_POST["lname"]." for the initiative.<br>"; ?>
	<?php echo "Date : " .date("l jS \of F Y h:i:s A") . "<br>"; ?>
	<?php echo "The goods you would like to donate : " . $_POST["goods"]. "<br>" ;?>
	<?php echo "Location : ". $_POST["center"]. "<br>"; ?>
	<?php echo "A confirmation mail is sent to ".$_POST["email"]."<br>" ?>

    <?php
    $server = "localhost";
    $username = "root";
    $password = "India123@R";
    $db = "giftsandsmiles";
        $a = $_POST["fname"];
        $b =$_POST["lname"];
        $c =$_POST["email"];
    $conn = mysqli_connect($server, $username, $password, $db);

    if(!$conn){
        die("Fail!");
    }
    else {
        echo "Success!! <br> ";
    }

    $sql = "INSERT INTO donor (fname, lname, email) VALUES ('$a','$b','$c')";

    if ($conn->query($sql) === TRUE) {
        echo "Donor details has been successfully saved";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
</body>
</html>