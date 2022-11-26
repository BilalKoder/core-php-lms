   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Batch</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form id="add_student" method="post">
								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="uniq_id" class="input focused" id="focusedInput" type="text" placeholder = "ID Number" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="name" class="input focused" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>

										<div class="control-group">
                                          <div class="controls">
                                            <input name="students" class="input focused" id="focusedInput" type="text" placeholder = "Students" required>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.js" integrity="sha512-SXJkO2QQrKk2amHckjns/RYjUIBCI34edl9yh0dzgw3scKu0q4Bo/dUr+sGHMUha0j9Q1Y7fJXJMaBi4xtyfDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.css" integrity="sha512-3uVpgbpX33N/XhyD3eWlOgFVAraGn3AfpxywfOTEQeBDByJ/J7HkLvl4mJE1fvArGh4ye1EiPfSBnJo2fgfZmg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script>
			jQuery(document).ready(function($){
				$("#add_student").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_internship.php",
						data: formData,
						success: function(html){
							$.jGrowl("Batch Successfully  Added", { header: 'Batch Added' });
							$('#studentTableDiv').load('internship_table.php', function(response){
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

				// http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/


					$('input[name="students"]').tagsinput({
						trimValue: true,
						confirmKeys: [13, 44, 32],
						focusClass: 'my-focus-class'
					});

					$('.bootstrap-tagsinput input').on('focus', function() {
						$(this).closest('.bootstrap-tagsinput').addClass('has-focus');
					}).on('blur', function() {
						$(this).closest('.bootstrap-tagsinput').removeClass('has-focus');
					});


			});
			</script>		
