<?php
include('dbcon.php');
        
               $title = $_POST['title'];
               $name = $_POST['name'];
               $faculty = $_POST['faculty'];
               $department = $_POST['department'];
               $email = $_POST['email'];
               $phone = $_POST['phone'];
               $specialisation_area = $_POST['specialisation_area'];
               $courses = $_POST['courses'];
               $qualification = $_POST['qualification'];
               $experience = $_POST['experience'];

               mysqli_query($conn,"insert into supervisors (title,name,faculty,department,email,phone,specialisation_area,courses,qualification,experience) values 
              ('$title','$name','$faculty','$department','$email','$phone','$specialisation_area','$courses','$qualification','$experience')") or die(mysqli_error()); ?>
<?php    ?>