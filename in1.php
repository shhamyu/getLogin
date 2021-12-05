<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body bgcolor=" #1A2226" >
    <?php
    $code = $_POST['code'];
    $host = "127.0.0.1";
    $dbUsername = "root";
    $dbPassword = "";
    $val1="Approved";
    $val2="UnApproved";
    $dbName = "login";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = mysqli_query($conn,"SELECT keyss FROM userdetail WHERE keyss = '$code'");
    if(mysqli_num_rows($sql) > 0)
    {
       echo'<p style="color:white"> The users product code is approved ! </p>';
       $sql = "UPDATE userdetail SET status='$val1' WHERE keyss = '$code'";
       if ($conn->query($sql) === TRUE) {
          echo'<p style="color:white"> The status is updated ! </p>';

       }
       else{
         echo "Error: " . $sql . "<br>" . $conn->error;
          echo'<p style="color:white"> Error occured ! </p>';

       }



    }
    else
    {
        echo'<p style="color:white"> The product code is not found! </p>';
             $sql = "UPDATE userdetail SET status='$val2' WHERE keyss = '$code'";
        if ($conn->query($sql) === TRUE) {
           echo'<p style="color:white"> The status is updated ! </p>';

        }
        else{
          echo "Error: " . $sql . "<br>" . $conn->error;
           echo'<p style="color:white"> Error occured ! </p>';


      }
    }



    $conn->close();
    ?>

  </body>
</html>
