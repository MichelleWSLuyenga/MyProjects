<?php

	class dbConn {
		public $conn;
		public function __construct(){

			include 'includes/config.php';
			// Connect to server and select database.
			$this->conn = new PDO('mysql:host='.$host.';dbname='.$db_name.';charset=utf8', $username, $password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	};

	class EmployeeConnection extends dbConn {


		public function getEmployees() {
			include 'config.php';
			try {
				$db = new dbConn;
				$err = '';
				$stmt = $db->conn->prepare("SELECT * FROM task"); //get all data from emplpoyee
				$stmt->execute();

				// Gets query result
				$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			catch (PDOException $e) {
				$err = "Error: " . $e->getMessage();
			}
			$success = ($err == '' ? $results : $err );

			return $success;
		}

		public function getDeparments() {
			include 'config.php';
			try {
				$db = new dbConn;
				$err = '';
				$stmt = $db->conn->prepare("SELECT * FROM department"); //get all data from emplpoyee
				$stmt->execute();

				// Gets query result
				$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
			catch (PDOException $e) {
				$err = "Error: " . $e->getMessage();
			}
			$success = ($err == '' ? $results : $err );

			return $success;
		}





		public function getEmployee($cssn) {
			include 'config.php';
			try {
				$db = new dbConn;
				$err = '';
				$stmt = $db->conn->prepare("SELECT * FROM creator_survey where CSSN = :cssn"  ); //:ssn comes from variable that we have passed on top while defining function
				$stmt->bindParam(':cssn', $cssn);
				$stmt->execute();

				// Gets query result
				$results = $stmt->fetch(PDO::FETCH_ASSOC);
			}
			catch (PDOException $e) {
				$err = "Error: " . $e->getMessage();
			}
			$success = ($err == '' ? $results : $err );

			return $success;
		}

		// get department from dno 
		public function getDeparment($dno) {
			include 'config.php';
			try {
				$db = new dbConn;
				$err = '';
				$stmt = $db->conn->prepare("SELECT * FROM department where dnumber = :dnumber"  );
				$stmt->bindParam(':dnumber', $dno);
				$stmt->execute();

				// Gets query result
				$results = $stmt->fetch(PDO::FETCH_ASSOC);
			}
			catch (PDOException $e) {
				$err = "Error: " . $e->getMessage();
			}
			$success = ($err == '' ? $results : $err );

			return $success;
		}

		// Just an idea how to delete data from a table
		

		// Just an idea how to update data from a table
		public function updateBanner($imageLink, $id) {
			include 'config.php';
			try {
				$db = new dbConn;
				$err = '';
				// prepare sql and bind parameters
				$stmt = $db->conn->prepare("UPDATE BANNER_INDEX SET image_link = :image_link WHERE id = :id");
				$stmt->bindParam(':image_link', $imageLink);
				$stmt->bindParam(':id', $id);
				$stmt->execute();
			}
			catch (PDOException $e) {
				$err = "Error: " . $e->getMessage();
			}
			//Determines returned value ('true' or error code)
			if ($err == '') {
				$success = 'true';
			}
			else {
				$success = $err;
			};

			return $success;
		}
	};

?>
