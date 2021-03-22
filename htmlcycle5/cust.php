
       <?php
          $conn = mysqli_connect ("localhost","20mca019","2434","20mca019");
        if(!$conn)
          {
            die("Not connected".mysqli_connect_error());
          }
     $sql = "SELECT C_No,C_Name,Item_Purchased,Mob_No FROM customer";
     $result=mysqli_query($conn,$sql);
    echo "<table border=1>
      <tr>
         <th>C_NO</th>
         <th>C_Name</th>
         <th>Item_Purchased</th>
         <th>Mob_No</th>
       </tr>";
    if(mysqli_num_rows($result) > 0) 
      {  
    while($row=mysqli_fetch_assoc($result))
         {
           echo "<tr>";
           echo "<td>".$row['C_No']."</td>";
           echo "<td>".$row['C_Name']."</td>";
           echo "<td>".$row['Item_Purchased']."</td>";
           echo "<td>".$row['Mob_No']."</td>";
           echo "</tr>";
         }
   echo"</table>";
  }
  mysqli_close($conn);
 ?>
