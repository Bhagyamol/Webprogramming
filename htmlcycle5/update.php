
<html>
<head></head>
<title<Student Registration</title>
<body>
<?php 
 $id=$_GET['id'];
$con=mysqli_connect("localhost","20mca019","2434","20mca019");
$qry="SELECT * FROM STUD where id='$id'";
$res=mysqli_query($conn, $qry);
$r=mysqli_fetch_array($res);
?>
<form method="post" action="update.php" >
<h1 style="text-align:center"><u>UPDATE</u></h1>
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
<table align="center">
<tr>
<td>Student ID</td>
<td>:</td>
<td><input type="text" name="sid" value="<?php echo $r['id'];?>"></td></tr>
<tr>
<td>Name of Student</td>
<td>:</td>
<td><input type="text" name="name" value="<?php echo $r['name'];?>"></td></tr>
<tr>
<td colspan="2" style="text-align:right"><input type="submit" value="update" name="update"></td></tr>
</table>
</form>
<?php
if(isset($_POST["update"]))
{
$id=$_POST["id"];
$sname=$_POST["name"];
$qry1="update student_name set name='$sname' where id='$id'";
if(mysqli_query($con, $qry1))
{
echo "Data updated successfully<br>";
}
}
?>
</body>
</html>