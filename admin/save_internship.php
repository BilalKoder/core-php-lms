<?php
include('dbcon.php');
        
               $uniq_id = $_POST['uniq_id'];
               $name = $_POST['name'];

               $students = json_encode($_POST['students']);

               mysqli_query($conn,"insert into internship_batch (uniq_id,name,students)
		values ('$uniq_id','$name',$students)                                    
		") or die(mysqli_error()); ?>
<?php    ?>