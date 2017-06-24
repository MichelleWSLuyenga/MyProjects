<?php include ('includes/header.php'); ?>
<?php include ("includes/employee_connection.php"); ?>
<?php
	$a = new EmployeeConnection;
	$cssn = $_GET["cssn"];//we are getting ssn from URL

	$result = $a->getEmployee($cssn);
	//print_r($result);
?>


<div class="container">
	<div class="row">
		<div class="page-header" style="margin: 0px;">
		  <h1> Creator ID: <?php echo $result["cssn"]   ?> <small><a href="index.php" class="btn btn-primary btn-xs">Back</a></small> </h1>

		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<br/>
			<form class="form-horizontal">

				<div class="form-group">
			    <label class="col-sm-2 control-label">Type</label>
			    <div class="col-sm-10">
			      <p class="form-control-static"><?php echo $result["type"] ?></p>
			    </div>
			  </div>

				<div class="form-group">
			    <label class="col-sm-2 control-label">Mobile</label>
			    <div class="col-sm-10">
			      <p class="form-control-static"><?php echo $result["mobile"] ?></p>
			    </div>
			  </div>

				<div class="form-group">
			    <label class="col-sm-2 control-label">Username</label>
			    <div class="col-sm-10">
			      <p class="form-control-static"><?php echo $result["username"] ?></p>
			    </div>
			  </div>

				<div class="form-group">
			    <label class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			      <p class="form-control-static"><?php echo $result["password"] ?></p>
			    </div>
			  </div>

			  	<div class="form-group">
			    <label class="col-sm-2 control-label">Company Email</label>
			    <div class="col-sm-10">
			      <p class="form-control-static"><?php echo $result["company_email"] ?></p>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 control-label">Major Key</label>
			    <div class="col-sm-10">
			      <p class="form-control-static"><?php echo $result["major_key"] ?></p>
			    </div>
			  </div>

			   <div class="form-group">
			    <label class="col-sm-2 control-label">One Time Code</label>
			    <div class="col-sm-10">
			      <p class="form-control-static"><?php echo $result["one_time_code"] ?></p>
			    </div>
			  </div>

			   <div class="form-group">
			    <label class="col-sm-2 control-label">Survey Tool (ID)</label>
			    <div class="col-sm-10">
			      <p class="form-control-static"><?php echo $result["stid"] ?></p>
			    </div>
			  </div>




				
			      
			    </div>
			  </div>

				
			    </div>
			  </div>

			</form>
		</div>
	</div>
	</br>
</div>

<?php include ('includes/footer.php'); ?>
