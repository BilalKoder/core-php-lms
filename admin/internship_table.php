	<?php include('dbcon.php'); ?>
	<form action="delete_internship.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li class="active">
					<a href="students.php">All</a>
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
					<th>Name</th>
					<th>ID Number</th>
					<th>Students</th>
					<th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($conn,"select * from internship_batch ORDER BY internship_batch.id DESC") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
	
		<td><?php echo $row['name']; ?></td> 
		<td><?php echo $row['uniq_id']; ?></td> 
		<td><?php echo $row['students']; ?></td> 
	
		<td width="30"><a href="edit_internship.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	</form>