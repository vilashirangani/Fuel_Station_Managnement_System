<html>
	<head>
		<title>Register Lubricant</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$LubId=$_POST['lubid'];
			$LubType=$_POST['ltype'];
			$UnitPrice=$_POST['uprice'];
			$UpDate=$_POST['update'];
			


			$sql="INSERT INTO Lubricant(LubricantId,Name,UnitPrice,UnitPricedDate) VALUES ('$FuelId','$FuelType','$UnitPrice','$UpDate')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='lubregdeo.php'</script>";

		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
				$conn -> close();

		}
	?>

		 <?php
               if(isset($_SESSION['name'])){
                    if($_SESSION['name'] != null){
        ?>
        <label id='helloLabel' >Hello 

        <?php
             echo $_SESSION['name'] ?>
                 
             </label>
             <?php
                    }
               }
                
        ?>
	</body>
</html>

