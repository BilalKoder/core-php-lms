<?php
include('dbcon.php');
        
            
               $fn = $_POST['fn'];
               $ln = $_POST['ln'];

               mysqli_query($conn,"insert into company (firstname,lastname,status)
		values ('$fn','$ln','Unregistered')                                    
		") or die(mysqli_error()); ?>
<?php    ?>