<?php include ('includes/header.php'); ?>  

<?php include ("includes/employee_connection.php"); ?>
<?php
	// Get all Employee

	$a = new EmployeeConnection;
	$employees =  $a->getEmployees();
?>
<div class="container">
	<div class="row">
		<div class="page-header" style="margin: 0px;">
		  <h1>Task <small></small></h1>
		</div>
	</div>
	</br>
</div>
<div class="container">
	<div class="row">
		<?php
		if (is_array($employees) || is_object($employees)) //if employeee is array we will loop through it
			{

				echo "<table class='table table-bordered'>";

				echo "<tr><th>Name</th><th>Status</th><th>CSSN</th></th>"; //order of row heading in table

				foreach ($employees as $result) {
					echo "<tr></tr>";
					echo "<td>".$result['name']."</td>";//FNAME comes from database, if it is chnaged from DB name then it will not through error but it will not show anything either
					echo "<td>".$result['status']."</td>";
					echo "<td typeid='".$result['cssn']."'><a href='employee_show.php?cssn=".$result['cssn']."'>".$result['cssn']."</a></td>"; //bcz ssn is a link //order of column what will come first
				
					
					echo "</tr>";
				}
				echo "</table>";
			}
		?>
	</div>
</div>


<?php include ('includes/footer.php'); ?>
