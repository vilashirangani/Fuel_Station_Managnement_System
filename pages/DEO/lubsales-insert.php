<html>
	<head>
		<title>Lubricant_Sales</title>
	</head>
	<body>
		 
		<?php
		
		


		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			include "../../dbConnect/dbConnect.php";
			$conn = dbConnect();
			
			$LubricantId=$_POST['lubid'];
			$Date=$_POST['date'];
			$Cashsale=$_POST['cashsale'];
			$Debtorsale=$_POST['debtsale'];
			$Cardsale=$_POST['cardsale'];
			$NOIe=$_POST['noi'];
			$TotAmnt = 0;
			

			$sql = "SELECT UnitPrice FROM lubricantprice WHERE (LubricantId = '$LubricantId' AND UnitPricedDate = '$Date') ";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {

    			// output data of each row
    			while($row = $result->fetch_assoc()) {
    				$Price = $row["UnitPrice"];
    				//calculate total amount (Amount = Unit price * No of Items - (debtor sales + card sales))
        			$TotAmnt = ($row["UnitPrice"] * $NOIe) - ($Debtorsale + $Cardsale);
    			}

    			$sql="INSERT INTO Lubricantsale(LubricantId,Date,Cashsale,Debtorsale,Cardsale,NoOfItems,TotalAmount) VALUES ('$LubricantId','$Date','$Cashsale','$Debtorsale','$Cardsale','$NOIe','$TotAmnt')";
			
			
				if ($conn->query($sql) === TRUE) {
    			echo "<script>window.alert('Successfully added !');
    			window.location='lubsales.php'</script>";

		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
    		}


			
				$conn -> close();

		}
	?>

		 
	</body>
</html>

