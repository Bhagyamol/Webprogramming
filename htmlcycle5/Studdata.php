<?php
       $servername = "localhost";
       $username = "username";
       $password = "password";
       $dbname = "myDB";

       $conn = mysqli_connect("localhost", "20mca019", "2434", "20mca019");
      if (!$conn) 
          {
           die("Connection failed: " . mysqli_connect_error());
           }
        
        $sql = "CREATE TABLE STUD (
         id INT(6) PRIMARY KEY,
         Name VARCHAR(30) NOT NULL,
         Branch VARCHAR(30) NOT NULL,
         Mark INT(50))";

      if ($conn->query($sql) === TRUE) 
        {
         echo "Table Stud created successfully";
        }  
     else 
      {
          echo "Error creating table: " . $conn->error;
       }
      
      $sql = "INSERT INTO STUD (id,Name,Branch,Mark)
              VALUES ('1','Anu', 'MCA','53')";
      $sql = "INSERT INTO STUD (id,Name,Branch,Mark)
              VALUES ('2','Kichu', 'MBA','78')";
      $sql = "INSERT INTO STUD (id,Name,Branch,Mark)
              VALUES ('3','Devi', 'MA','89')"; 
      $sql = "INSERT INTO STUD (id,Name,Branch,Mark)
              VALUES ('4','Sharan', 'Mcom','100')";
      if (mysqli_query($conn, $sql)) 
       {
         echo "New record created successfully";
       } 
    else 
  {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  $sql = "SELECT * FROM STUD";
  $result = mysqli_query($conn, $sql);
  
if (mysqli_num_rows($result) > 0) 
  {
   echo "<table border='1'>
   <tr>
     <th>ID</th>
     <th>Name</th>
    <th>Branch</th>
    <th>Mark</th> 
   </tr>";

  while($row = mysqli_fetch_assoc($result)) 
   {
   echo "id".$row["id"];
   echo "Name".$row["Name"];
   echo "Branch".$row["Branch"];
   echo "Mark".$row["Mark"];
   }
   echo "</table>";
  } 
   else 
  {
  echo "0 results";
}


   mysqli_close($conn);
?>