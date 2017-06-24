<?php include ('includes/header.php'); ?>  

<?php include ("includes/employee_connection.php"); ?>
<?php
	// Get all Employee

	$a = new EmployeeConnection;
	$employees =  $a->getDeparments();
?>
<div class="container">
	<div class="row">
		<div class="page-header" style="margin: 0px;">
		  <h1>Department <small></small></h1>
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
				echo "<tr><th>DNO</th><th>DName</th><th> MANAGER</th></tr>"; //order of row heading in table
				foreach ($employees as $result) {
					echo "<tr type id='".$result['DNUMBER']."'><td><a href='department_show.php?dnumber=".$result['DNUMBER']."'>".$result['DNUMBER']."</a></td>"; //bcz ssn is a link 
					echo "<td>".$result['DNAME']."</td>";//FNAME comes from database, if it is chnaged from DB name then it will not through error but it will not show anything either
					
					echo "<td>";
					echo $a->getEmployee($result['MGR_SSN'])["FNAME"];//we pass super_sssn ID but we are returnign FNAME
					echo "</td>";
					
					echo "</tr>";
				}
				echo "</table>";
			}
		?>
	</div>
</div>


<?php include ('includes/footer.php'); ?>
