<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User data base</title>
    <link rel="stylesheet" href="data.css">
  </head>
  <body bgcolor=" #1A2226"   text-align="center" >
    <?php
    //$code = $_POST['code'];
    $host = "127.0.0.1";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "login";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM userdetail";


    echo '<table bgcolor="#4682B4" border="0" cellspacing="2" cellpadding="2">
     <tr>
         <td> <font color="FFFFFF" face="Arial">NAME         </font> </td>

         <td> <font color="FFFFFF" face="Arial">PRODUCT NAME </font> </td>
         <td> <font color="FFFFFF" face="Arial">DATE         </font> </td>
         <td> <font color="FFFFFF" face="Arial">MONTH        </font> </td>
         <td> <font color="FFFFFF" face="Arial">YEAR         </font> </td>
         <td> <font color="FFFFFF" face="Arial">TITLE        </font> </td>
         <td> <font color="FFFFFF" face="Arial">EMAIL        </font> </td>
         <td> <font color="FFFFFF" face="Arial">CODE         </font> </td>
         <td> <font color="FFFFFF" face="Arial">STATUS       </font> </td>
     </tr>';

if ($result = $conn->query($query)) {
   while ($row = $result->fetch_assoc()) {
       $field1name = $row["name"];
       $field2name = $row["productname"];
       $field3name = $row["dates"];
       $field4name = $row["month"];
       $field5name = $row["year"];
       $field6name = $row["title"];
       $field7name = $row["email"];
       $field8name = $row["keyss"];
       $field9name = $row["status"];

       echo '<tr>
                 <td>'.$field1name.'</td>
                 <td>'.$field2name.'</td>
                 <td>'.$field3name.'</td>
                 <td>'.$field4name.'</td>
                 <td>'.$field5name.'</td>
                 <td>'.$field6name.'</td>
                 <td>'.$field7name.'</td>
                 <td>'.$field8name.'</td>
                 <td>'.$field9name.'</td>
             </tr>';

   }
   $result->free();
}






    $conn->close();
    ?>
    <br>
    <br>
<form class="" action="admin.html" method="post">


    <button  type="submit" class="btn">
      <i>back</i>    </button>
      </form>
    <br>
    <br>


  </body>
</html>
