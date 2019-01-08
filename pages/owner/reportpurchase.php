<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Purchase_Report</title>

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
      <!-- Extra css -->
      <link href="../style.css" rel="stylesheet">
      <link href="footer.css" rel="stylesheet">
      <!-- Custom Fonts -->
      <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <!-- Header -->
      <?php include 'include/headerowner.php' ?>
   </head>
   <body background="back-ground.jpg.jpg">
      <div id="wrapper">
         <div id="page-wrapper">
            <div class="row">
               <div class="col-lg-12">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        Report For Purchases
                     </div>
                     <!-- /.panel-heading -->
                     <div class=panelbody>
                        <form width=70% action="reportpurchase.php" method="post">
                           <label for="fid">Date Range</label><br />
                           From:- <input type="date" id="fromdate" name="fromdate" placeholder="Enter Date from.." required><br />
                           To:-   <input type="date" id="todate" name="todate" placeholder="Enter Date to.." required><br />
                           <center><input type="submit" value="Submit"></center>
                           <br /><br />
                        </form>

                        <?php
                           if ($_SERVER['REQUEST_METHOD'] == 'POST')
                            {
                            include "../../dbConnect/dbConnect.php";
                           
                            $conn = dbConnect();
                            $FromDate = $_POST['fromdate'];
                            $ToDate = $_POST['fromdate'];
                            if (isset($FromDate) && isset($ToDate))
                                {
                                $sql = "SELECT FuelId, Date, Time, FuelAmount, TotalPrice, BowserNo, InvoiceNo FROM fuelpurchase WHERE Date BETWEEN '$FromDate' AND '$ToDate' ORDER BY Date DESC ";
                                $result = $conn->query($sql);
                                echo '<div id="report">';
                                echo '<table class="blueTable"><caption>Fuel Purchase Details</caption><tr><th>FuelId</th><th>Date</th><th>Time</th><th>Fuel Amount</th><th>Total Price</th><th>BowserNo</th><th>InvoiceNo</th></tr>';

                                if ($result->num_rows > 0)
                                    {
                           
                                    // output data of each row
                           
                                    while ($row = $result->fetch_assoc())
                                        {
                                        echo "<tr><td>" . $row["FuelId"] . "</td><td>" . $row["Date"] . "</td><td>" . $row["Time"] . "</td><td>" . $row["FuelAmount"] . "</td><td>" . $row["TotalPrice"] . "</td><td>" . $row["BowserNo"] . "</td><td>" . $row["InvoiceNo"] . "</td></tr>";
                                        }
                           
                                    echo "</table><br /><br />";
                                    } else {
                                       echo "Err:". $conn->error; 
                                    }
                           
                                $sql = "SELECT LubricantId, Date, Amount, Quantity, InvoiceNo FROM lubricantpurchase WHERE Date BETWEEN '$FromDate' AND '$ToDate' ORDER BY Date DESC ";
                                $result = $conn->query($sql);
                                echo '<table class="blueTable"><caption>Lubricant Purchase Details</caption><tr><th>LubricantId</th><th>Date</th><th>Amount(Rs)</th><th>Quantity</th><th>Invoice No</th></tr>';
                                if ($result->num_rows > 0)
                                    {
                           
                                    // output data of each row
                           
                                    while ($row = $result->fetch_assoc())
                                        {
                                        echo "<tr><td>" . $row["LubricantId"] . "</td><td>" . $row["Date"] . "</td><td>" . $row["Amount"] . "</td><td>" . $row["Quantity"] . "</td><td>" . $row["InvoiceNo"] . "</td></tr>";
                                        }
                           
                                    echo "</table><br /><br />";
                                    echo "</div>";
                                    echo '<input type="button" value="Download" id="pdf" class="btn btn-success"/>';
                                    
                                    } else {
                                       echo "Err:". $conn->error;
                                    }
                                }
                           
                            $conn->close();
                            }
                           
                           ?>   
                     </div>
                  </div>
               </div>
            </div>
         </div>
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
      <!-- pdf -->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script type="text/javascript">
        $("#pdf").live("click", function () {
            var divContents = $("#report").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>Purchase Report</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
      <!-- Footer -->
      <?php include 'include/footer.php' ?>
   </body>
</html>