<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sales_Report</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../vendor/metisMenu/table.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../vendor/morrisjs/morris.css" rel="stylesheet">

     <link href="../style.css" rel="stylesheet">
     


    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php include 'include/headermanager.php'?>
    
</head>

<body background="back-ground.jpg.jpg">

    <div id="wrapper">

       
        <div id="page-wrapper">
            <div class="row">
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Report For Sales
                        </div>
                        <!-- /.panel-heading -->
                        <div class=panelbody>
  <form width=70% action="reportsales.php" method="post">
   
       <label for="fid">Date Range</label><br>
    From:- <input type="date" id="fromdate" name="fromdate" placeholder="Enter Date from.." required><br>
    To:-   <input type="date" id="todate" name="todate" placeholder="Enter Date to.." required><br>
      
          
  <center>
    <input type="submit" value="Submit"></center><br><br>
  </form>
  
<?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                include "../../dbConnect/dbConnect.php";
                 $conn = dbConnect();
                $FromDate = $_POST['fromdate'];
                $ToDate = $_POST['fromdate'];
        

                if (isset($FromDate) && isset($ToDate)) {

                
                    $sql = "SELECT LubricantId,Date,Cashsale,Debtorsale,Cardsale,NoOfItems,TotalAmount FROM lubricantsale
                    WHERE Date BETWEEN '$FromDate' AND '$ToDate' ORDER BY Date DESC ";
                $result = $conn->query($sql);
                

                echo '<table class="blueTable"><tr><th>Lubricant Id</th><th>Date</th><th>Cash Sales</th><th> Debtor Sales</th><th>Card Sales</th><th>Number of Items</th><th>Total Amount</th></tr>';

                if ($result->num_rows > 0) {
                   
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    // $EmpId = $row["EmpId"];
                    // echo "$EmpId";
                     
                    

                    echo "<tr><td>" . $row["LubricantId"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["Cashsale"]. "</td><td>" . $row["Debtorsale"]. "</td><td>". $row["Cardsale"]. "</td><td>" . $row["NoOfItems"]. "</td><td>" . $row["TotalAmount"]. "</td></tr>";
                }
                echo "</table><br><br>";
}
    
                  $sql = "SELECT PumpId,PumperId,Date,OMReading,CMReading,Stime,Etime,TotalAmount,DebtorSales,CardSales,ToBeRecieved FROM fuelsale
                    WHERE Date BETWEEN '$FromDate' AND '$ToDate' ORDER BY Date DESC ";

                $result = $conn->query($sql);
                

                echo '<table class="blueTable"><tr><th>PumpId</th><th>Pumper Id</th><th>Date</th><th>Opening Meter Reading</th><th>Closing Meter Reading</th><th>Start Time</th><th>End Time</th><th>Total Amount</th><th>Debtor Sales</th><th>Card Sales</th><th>Cash To Be Recieved</th></tr>';

                if ($result->num_rows > 0) {
                   
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    // $EmpId = $row["EmpId"];
                    // echo "$EmpId";
                     
                    

                echo "<tr><td>" . $row["PumpId"]. "</td><td>" . $row["PumperId"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["OMReading"]. "</td><td>" . $row["CMReading"]. "</td><td>". $row["Stime"]. "</td><td>" . $row["Etime"]. "</td><td>" . $row["TotalAmount"]. "</td><td>" . $row["DebtorSales"]. "</td><td>" . $row["CardSales"]. "</td><td>" . $row["ToBeRecieved"]. "</td></tr>";
                }
                echo "</table><br><br>";
}



                }
            

                

                $conn -> close();

            }

        ?>   
</div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../../vendor/flot/excanvas.min.js"></script>
    <script src="../../vendor/flot/jquery.flot.js"></script>
    <script src="../../vendor/flot/jquery.flot.pie.js"></script>
    <script src="../../vendor/flot/jquery.flot.resize.js"></script>
    <script src="../../vendor/flot/jquery.flot.time.js"></script>
    <script src="../../vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="../../data/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>

    <?php include 'include/footer.php' ?>

</body>

</html>

