<?php
   $servername = "localhost";
   $username = "20mca019";
   $password = "2434";
    $dbname ="20mca019";
if(isset($_POST['insert']))
 {
 $conn = mysqli_connect($servername, $username,$password,$dbname);
 if(!$conn)
   {   
    die("Connection failed".mysqli_connect_error());
   }
 
  $name =$_POST['name'];
  $rollno = $_POST['rollno'];
  $gender =$_POST['gender'];
  $address = $_POST['address'];
  $sql = "INSERT INTO studinfo(name,rollno,gender,address) VALUES('$name','$rollno','$gender','$address')";
if(mysqli_query($conn,$sql))
  {
   echo "Data inserted successfully<br>";
  }
  $select = "SELECT name,rollno,gender,address FROM studinfo";
  $result = mysqli_query($conn,$select);
  echo "<table border=1>
   <tr>
      
      <th>Name</th>     
      <th>Roll No</th>
      <th>Gender</th>
      <th>Address</th>
    </tr>"; 
   if(mysqli_num_rows($result) > 0)
    {
  while($row = mysqli_fetch_assoc($result))

       {
       echo "<tr>";
       
       echo "<td>".$row['name']."</td>";
       echo "<td>".$row['rollno']."</td>";
       echo "<td>".$row['gender']."</td>";
       echo "<td>".$row['address']."</td>";
       echo "</tr>";
       }
    echo "</table>";
   }
    else 
       {
        echo "No records in the table";
        } 
  }
  mysqli_close($conn);
 

 
?>