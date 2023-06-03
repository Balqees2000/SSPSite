
<html>
<head>
        
    <meta name="veiwport" content="with=device-width, initial-scale=1.0">
    <title>Pets Shop</Title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<!--<script src="Javascript/Navbarjs.js"></script>-->
<body>

</html>

<?php

$host="localhost";
$user="id20333275_balqees";
$password="project_1234iA";
$db="id20333275_publications";

$conn=mysqli_connect($host,$user,$password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


  if (isset($_POST['delete']) && isset($_POST['userId']))
  {
    $isbn   = get_post($conn, 'userId');
    $query  = "DELETE FROM Users WHERE userId ='$isbn'";
    $result = $conn->query($query);
  	if (!$result) echo "DELETE failed: $query<br>" .
      $conn->error . "<br><br>";
  }
  

  $query  = "SELECT * FROM Users";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $rows = $result->num_rows;
  


  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);

    echo <<<_END
<link rel="stylesheet" href="Table.css">
  

        <div clas="tabless">

  
  <table border = "1" class="DatabaseTable">
  
  <tr>
    <th>User Name</th>
    <th>$row[0]</th>
  </tr>
  
  <tr>
    <th>User Email</th>
    <th>$row[1]</th>

  </tr>
  
   <tr>
    <th>User Id</th>
    <th>$row[3]</th>

  </tr>
  
     <tr>
    <th>User Pet Name</th>
    <th>$row[4]</th>

  </tr>

      
  
      </table>
  </pre>
    <form action="deleteup.php" method="post">
  <input type="hidden" name="delete" value="yes">
  <input type="hidden" name="UserId" value="$row[0]">
  <input type="submit" value="DELETE RECORD" class="Delete">
 
  </form> 
     <form action="update.php" method="POST">
  <input type="hidden" name="update" value="yes">
  <input type="hidden" name="UserId" value="$row[0]">
  <input type="submit" value="UPDATE RECORD" class="Delete"> </form> 
</div>
_END;
  }
  
  
  $result->close();
  $conn->close();
  
  function get_post($conn, $var)
  {
    return $conn->real_escape_string($_POST[$var]);
  }
?>