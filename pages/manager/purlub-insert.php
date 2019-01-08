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
			

			$sql = "INSERT INTO lubricantpurchase(LubricantId, Date,Amount, InvoiceNo) VALUES ('$LubId', '$Date', '$Amount','$InvoiceNo')";
			
			
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
