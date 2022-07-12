<?php
require_once('logics/dbconnection.php');
$sqlquery = mysqli_query($conn,"SELECT * FROM enrollment");
?>
<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	<!-- All our code. write here   -->
	<div class="header">
	<?php require_once('includes/navbar.php')?>
	</div>
	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 pt-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>Full Name</th>
									<th>Phone Number</th>
									<th>Email</th>
									<th>Gender</th>
									<th>Course</th>
									<th>Enrolled On</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php while($fetchRecords = mysqli_fetch_array($sqlquery)) {?>
									<tr>
										<td><?php echo $fetchRecords['no']?></td>
										<td><?php echo $fetchRecords['FullName']?></td>
										<td><?php echo $fetchRecords['PhoneNumber']?></td>
										<td><?php echo $fetchRecords['emailaddress']?></td>
										<td><?php echo $fetchRecords['gender']?></td>
										<td><?php echo $fetchRecords['course']?></td>
										<td><?php echo $fetchRecords['created_at']?></td>
										<td>
											<a href="#" class="btn btn-primary btn-sm">
											<i class="fa fa-edit"></i>
											<a href="#" class="btn btn-primary btn-sm">
											<i class="fa fa-eye"></i>
											<a href="#" class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i>
									</td>
									</tr>
								<?php }?>
								
							</tbody>
						</table>
					</div>
					<div class="cardfooter"></div>
				</div>
			</div>
		</div>
	</div>
   
	
	<?php require_once('includes/scripts.php')?>
</body>
</html>