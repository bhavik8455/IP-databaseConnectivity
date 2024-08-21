<!DOCTYPE html>
<html lang="en">

<head>

    <title>Form</title>


    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>REGISTRATION FORM</h1>


    <form class="container" action="index.php" method="post">

        <div class="input">
            <label>Student Name</label><br>
            <input name="Fname" type="text">
            <input name="Mname" type="text">
            <input name="Lname" type="text"><br>
        </div>

        <div class="name">
            <label>First Name</label>
            <label>Midddle Name</label>
            <label>Last Name</label>
        </div>




        <div class="stud-id">
            <label>Student ID</label>
            <input name="studid" type="text">
        </div>


        <div class="Stud=email">
            <label>Student E-mail</label>

            <input name="email" type="email" placeholder="ex:myname@gmail.com">
        </div>


        <div class="stud-pass">
            <label>Password</label>
            <input name="password" type="password">
        </div>


        <div class="btn">
            <button name="submit" type="submit">Submit</button>
        </div>



    </form>

</body>


<?php

// connection
$con = mysqli_connect("localhost", "root", "", "register");

if (isset($_POST['submit'])) {

    $fname = $_POST['Fname'];
    $mname = $_POST['Mname'];
    $lname = $_POST['Lname'];
    $studid = $_POST['studid'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `register_data` (`Fname`, `Mname`, `Lname`, `studid`, `email`, `password`) VALUES ('$fname', '$mname', '$lname', '$studid', '$email', '$password')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }


    mysqli_close($con);
}



?>

</html>