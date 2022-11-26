   <div class="row-fluid">
       <a href="students.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Student</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Student</div>
                            </div>
                            <div class="block-content collapse in">
							<?php
							$query = mysqli_query($conn,"select * from student LEFT JOIN class ON class.class_id = student.class_id where student_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
                                <div class="span12">
								<form method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="cys" class="" required>
                                             	<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
											<?php
											$cys_query = mysqli_query($conn,"select * from class order by class_name");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['class_id']; ?>"><?php echo $cys_row['class_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="un" value="<?php echo $row['username']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="fn"  value="<?php echo $row['firstname']; ?>"  class="input focused" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln"  value="<?php echo $row['lastname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <div class="controls">
                                            <input  name="faculty" value="<?php echo $row['faculty']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Faculty" required>
                                          </div>
                                        </div>

										<div class="control-group">
                                          <div class="controls">
                                            <input  name="department" value="<?php echo $row['department']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Department" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="year" value="<?php echo $row['year']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Year" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="intake" value="<?php echo $row['intake']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "intake" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="dates" class="input focused" value="<?php echo $row['dates']; ?>" id="focusedInput" type="date" placeholder = "dates" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="phone" class="input focused" value="<?php echo $row['phone']; ?>" id="focusedInput" type="text" placeholder = "phone" required>
                                          </div>
                                        </div>
								
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="email" class="input focused" value="<?php echo $row['email']; ?>" id="focusedInput" type="email" placeholder = "email" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="qualification" value="<?php echo $row['qualification']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Qualification" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="cgpa" class="input focused" value="<?php echo $row['cgpa']; ?>" id="focusedInput" type="text" placeholder = "Current CGPA" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="experience" class="input focused" value="<?php echo $row['experience']; ?>" id="focusedInput" type="text" placeholder = "experience" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="interest_areas" class="input focused" value="<?php echo $row['interest_areas']; ?>" id="focusedInput" type="text" placeholder = "Interested Areas" required>
                                          </div>
                                        </div>                                        
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
		
	      <?php
                            if (isset($_POST['update'])) {
                               
                                $un = $_POST['un'];
                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
                                $cys = $_POST['cys'];
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
                      

								mysqli_query($conn,"update student set username = '$un' , firstname ='$fn' , lastname = '$ln' , class_id = '$cys',  faculty = '$faculty' , department = '$department' , year = '$year' , intake = '$intake' , dates ='$dates' , email ='$email' , phone = '$phone' , qualification= '$qualification' , cgpa = '$cgpa' , experience= '$experience' , interest_areas ='$interest_areas',  where student_id = '$get_id' ")or die(mysqli_error());

								?>
 
								<script>
								window.location = "students.php"; 
								</script>

                       <?php     }  ?>
	