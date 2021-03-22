
<?php
$con=mysqli_connect("localhost","20mca019","2434","20mca019");
$id=$_GET["id"];
if($conn)
{

$qry1="delete from student_name where id='$id'";
if(mysqli_query($conn, $qry1))
{
echo "Data Removed<br>";
} 
}
?>


