   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Supervisor</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form id="add_student" method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="title" class="" required>
                                             	<option value="Mr.">Mr.</option>
												<option value="Mrs.">Mrs.</option>
                                            </select>
                                          </div>
                                        </div>
								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="title" class="input focused" id="focusedInput" type="text" placeholder = "Title" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="name" class="input focused" id="focusedInput" type="text" placeholder = "Name" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="faculty" class="input focused" id="focusedInput" type="text" placeholder = "Faculty" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input name="department" class="input focused" id="focusedInput" type="text" placeholder = "Department" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="email" class="input focused" id="focusedInput" type="text" placeholder = "Email" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="phone" class="input focused" id="focusedInput" type="text" placeholder = "Phone" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input name="specialisation_area" class="input focused" id="focusedInput" type="text" placeholder = "Specialisation Area" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="courses" class="input focused" id="focusedInput" type="text" placeholder = "Courses" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="qualification" class="input focused" id="focusedInput" type="text" placeholder = "Qualification" required>
                                          </div>
                                        </div>

										<div class="control-group">
                                          <div class="controls">
                                            <input  name="experience" class="input focused" id="focusedInput" type="text" placeholder = "Experience" required>
                                          </div>
                                        </div>
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
			<script>
			jQuery(document).ready(function($){
				$("#add_student").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_supervisor.php",
						data: formData,
						success: function(html){
							$.jGrowl("Supervisor Successfully  Added", { header: 'Supervisor Added' });
							$('#studentTableDiv').load('supervisor_table.php', function(response){
								$("#studentTableDiv").html(response);
								$('#example').dataTable( {
									"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
									"sPaginationType": "bootstrap",
									"oLanguage": {
										"sLengthMenu": "_MENU_ records per page"
									}
								} );
								$(_this).find(":input").val('');
								$(_this).find('select option').attr('selected',false);
								$(_this).find('select option:first').attr('selected',true);
							});
						}
					});
				});
			});
			</script>		
