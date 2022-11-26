	<?php include('dbcon.php'); ?>
	<form action="delete_supervisor.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li class="active">
					<a href="supervisor.php">All</a>
				</li>
				<li class="">
					<a href="unreg_students.php">Unregistered</a>
				</li>
				<li class="">
				<a href="reg_students.php">Registered</a>
				</li>
				</ul>
	</div>
	<?php include('modal_delete.php'); ?>
		<thead>
		<tr>
					<th></th>
					<th>Title</th>
					<th>Name</th>
					<th>Facluty</th>
					<th>Dept.</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Specialization</th>
					<th>Courses</th>
					<th>Qualification</th>
					<th>Experience</th>
					<th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($conn,"select * from supervisors ORDER BY supervisors.id DESC") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
	
		<td><?php echo $row['title'];?></td> 
		<td><?php echo $row['name'];?></td> 
		<td><?php echo $row['faculty'];?></td> 
		<td><?php echo $row['department'];?></td> 
		<td><?php echo $row['email'];?></td> 
		<td><?php echo $row['phone']; ?></td> 
		<td width="100"><?php echo $row['specialisation_area']; ?></td> 
		<td><?php echo $row['courses'];?></td> 
		<td><?php echo $row['qualification']; ?></td> 
		<td><?php echo $row['experience']; ?></td> 
		<td width="30"><a href="edit_supervisor.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>