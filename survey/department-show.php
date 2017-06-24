<?php include ('includes/header.php'); ?>
<?php include ("includes/employee_connection.php"); ?>
<?php
	$a = new EmployeeConnection;
	$dnumber = $_GET["dnumber"];//we are getting ssn from URL

	$result = $a->getDeparment($dnumber); //
?>


<div class="container">
	<div class="row">
		<div class="page-header" style="margin: 0px;">
		  <h1><?php echo $result["DNAME"] ?> <small><a href="index.php" class="btn btn-primary btn-xs">Back</a></small> </h1>

		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<br/>
			<form class="form-horizontal">

				<div class="form-group">
			    <label class="col-sm-2 control-label">Department Number</label>
			    <div class="col-sm-10">
			      <p class="form-control-static"><?php echo $result["DNUMBER"] ?></p>
			    </div>
			  </div>

				<div class="form-group">
			    <label class="col-sm-2 control-label">Manager</label>
			    <div class="col-sm-10">
			      <p class="form-control-static"><?php echo $a->getEmployee($result['MGR_SSN'])["FNAME"]; ?></p>
			    </div>
			  </div>

				<div class="form-group">
			    <label class="col-sm-2 control-label">Start Date</label>
			    <div class="col-sm-10">
			      <p class="form-control-static"><?php echo $result["MGR_START_DATE"]; ?></p>
			    </div>
			  </div>

				

			</form>
		</div>
	</div>
	</br>
</div>

<?php include ('includes/footer.php'); ?>
