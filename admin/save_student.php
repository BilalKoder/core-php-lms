<?php
include('dbcon.php');
        
               $un = $_POST['un'];
               $fn = $_POST['fn'];
               $ln = $_POST['ln'];
               $class_id = $_POST['class_id'];
               $faculty = $_POST['faculty'];
               $department = $_POST['department'];
               $year = $_POST['year'];
               $intake = $_POST['intake'];
               $dates = $_POST['dates'];
               $email = $_POST['email'];
               $phone = $_POST['phone'];
               $qualification = $_POST['qualification'];
               $cgpa = $_POST['cgpa'];
               $experience = $_POST['experience'];
               $interest_areas = $_POST['interest_areas'];
              

               mysqli_query($conn,"insert into student (username,firstname,lastname,location,class_id,status,faculty,department,year,intake,dates,email,phone,qualification,cgpa,experience,interest_areas)
		values ('$un','$fn','$ln','uploads/NO-IMAGE-AVAILABLE.jpg','$class_id','Unregistered','$faculty','$department','$year','$intake','$dates','$email','$phone','$qualification','$cgpa','$experience','$interest_areas')                                    
		") or die(mysqli_error()); ?>
<?php    ?>