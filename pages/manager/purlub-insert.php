<html>
	<head>
		<title>Purchase_Lub</title>
	</head>
	<body>
		 




<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$LubId=$_POST['lubid'];
			$Date=$_POST['date'];
			$Amount=$_POST['amount'];
			$InvoiceNo=$_POST['invoiceNo'];
			$Quantity=$POST['quantity'];
			

			$sql = "INSERT INTO lubricantpurchase(LubricantId, Date,Amount, InvoiceNo, Quantity) VALUES ('$LubId', '$Date', '$Amount','$InvoiceNo','$Quantity')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='purlub.php'</script>";

		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
				$conn -> close();

		}
	?>
</body>
</html>
