<?php
include('dbcon.php');
if (isset($_POST['delete_student'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	 mysqli_query($conn,"DELETE FROM supervisors where id='$id[$i]'");
}
header("location: supervisors.php");
}
?>