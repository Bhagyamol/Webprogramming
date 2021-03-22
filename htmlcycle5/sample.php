<html>
      <head><title>Insert Delete Update</title></head>
      <div align="center">
       <h1 style="text-align:center><u>Insert Data</u></h1>
       <form method="post" action="sample.php">
       <input type="text" name="name>
       <input type="submit" value="submit" name=submit>
      </div>
    <div align="center">
      <form method="post" action="sample.php">
      <h1 style-"text-align:center"><u>Update Data</u></h1>
      <input type="text" name="search_id">
      <input type="submit" name="search" value="Search">
      <input type="submit" name="view" value="view">
      </form>
    </div>
 <?php
    $conn=mysqli_connect("localhost","20mca019","2434","20mca019");
    if(isset($_POST[submit]))
      {
        if($conn)
          {
           echo $name=$_POST["name"];
           $qry="INSERT INTO STUD(name) VALUES('$name')";
           if(mysqli_query($conn,$qry))
              {
                 echo "Data Inserted succesfully";
               }
            }
        }
   if(isset($_POST["search]))
     {
       $id=$_POST["search_id"];
       $qry="SELECT * FROM STUD WHERE id='$id'";
       $result=mysqli_query($conn,$qry);
      }
?>
<h1 style=text-align:center"<u>STUDENT DETAILS</u></h1>
<table align="center" border=1>;
   <tr>
     <th>ID</th>
     <th>Name</th>
   </tr>
<?php

  $res=mysqli_fetch_array($data);
?>
  <tr>
     <td><?php echo $res['id'];?></td>
      <td>?php echo $res['name'];?></td>
      <td><a href="update.php?id=<?php echo $res['id'];?>">update</a></td>
      <td><a href="delete.php?id=<?php echo $res['id'];?>">DELETE</a></td>
    </tr>
   <?php

</table>
<?php
}
if(isset($_POST["view"]))
{
$qry="select*from student_name";
$data=mysqli_query($conn, $qry);
?>
<h1 style="text-align:center"><u>STUDENT DETAILS</u></h1>
<table align="center" border="1">
<tr>
<th>ID</th>
<th>Name</th>
</tr>
<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['name'];?></td>
</tr>

<?php
}
}
?>
</table>
</body>
</html>

