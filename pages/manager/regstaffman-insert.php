<html>
	<head>
		<title>Register_Staff</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			//create DB connection
			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			//assign user inputs to variables.
			$NIC=$_POST['NIC'];
			$EmpId=$_POST['empid'];
			$fname=$_POST['firstname'];
			$lname=$_POST['lastname'];
			$cno=$_POST['cno'];
			$address=$_POST['address'];
			$dob=$_POST['dob'];
			$email=$_POST['email'];
			$type=$_POST['type'];
			$password=$_POST['password'];
			$IntType;
            
            //Convert string user type to integer value
			if (strcmp($type, "DEO")){
				$IntType = 1;
			}elseif (strcmp($type, "Manager")) {
				$IntType = 2;
			}elseif (strcmp($type, "Cashier")) {
				$IntType = 3;
			}elseif (strcmp($type, "Owner")) {
				$IntType = 4;
			}
			
			// insert user data to DB
			$sql="INSERT INTO Employee(NIC,EmpId,FirstName,LastName,TelephoneNo,Address,DOB,Email,Type,Password) VALUES ('$NIC','$EmpId','$fname','$lname','$cno','$address','$dob','$email','$IntType','$password')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='regstaffman.php'</script>";

		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
				$conn -> close();

		}
	?>


	</body>
</html>

