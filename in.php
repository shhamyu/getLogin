<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="data.css">
  </head>
  </head>
  <body bgcolor=" #1A2226">

    <?php
    $name = $_POST['name'];
    $productname = $_POST['productname'];
    $dates = $_POST['dates'];
    $month= $_POST['month'];
    $year = $_POST['year'];
    $title = $_POST['title'];
    $email = $_POST['email'];
    $host = "127.0.0.1";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "login";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    $keys1=$productname.$title;
    $keys2=$keys1.$dates;
    $keys3=$keys2.$month;
    $keys4=$keys3.$year;
    $keyss=$keys4;



    // Create connection
    //$conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    //$sql = "INSERT INTO userdetail(name, productname,dates, month,year, title,email) values(?, ?, ?, ?, ?, ?, ?)";
    $sql = "INSERT INTO userdetail(name, productname,dates, month,year, title, email, keyss) VALUES('$name' ,'$productname' ,'$dates' ,'$month' , '$year', '$title' , '$email' , '$keyss' )";
    if ($conn->query($sql) === TRUE) {
       echo'<p style="color:white"> The users details are inserted ! </p>';

    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
       echo'<p style="color:white"> The user is not inserted ! </p>';
    }

    $conn->close();
    ?>

    <br>
    <br>
<form class="" action="form.html" method="post">


    <button  type="submit" class="btn">
      <i>back</i>    </button>
      </form>
    <br>
    <br>





  </body>
</html>
