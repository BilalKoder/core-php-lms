   <div class="row-fluid">
       <a href="students.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Student</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Company</div>
                            </div>
                            <div class="block-content collapse in">
							<?php
							$query = mysqli_query($conn,"select * from company where id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
                                <div class="span12">
								<form method="post">
								
								     
							
										
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
                               
                         
                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
                      
                      

								mysqli_query($conn,"update company set  firstname ='$fn' , lastname = '$ln'  where id = '$get_id' ")or die(mysqli_error());

								?>
 
								<script>
								window.location = "companies.php"; 
								</script>

                       <?php     }  ?>
	