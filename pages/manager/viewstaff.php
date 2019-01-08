<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>View_Staff</title>

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

        <!-- Extra Links -->
        <link href="../style.css" rel="stylesheet">
        <link href="footer.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Header -->
        <?php include 'include/headermanager.php'?>
        
    </head>

    <body background="back-ground.jpg.jpg">

        <div id="wrapper">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               View Staff Details
                            </div>
            
                            <div class=panelbody>
                                <form width=70% action="viewstaff.php" method="post">
                                    <label for="fid">Employee ID</label><br>
                                    <select name="empid" id="empid">
                                        <?php
                                            include "../../dbConnect/dbConnect.php";
                                            $count=0;
                                            $conn=dbConnect();

                                            $sql="SELECT EmpId from Employee ";

                                            $result=$conn->query($sql);

                                            if($result->num_rows>0){
                                                while($row=$result->fetch_assoc()){
                                                $n=$row['EmpId'];
                                                echo "<option value='$n'>".$row['EmpId']."</option>";

                                                $count++;
                                                }
                                            }
                                             
                                            $sql="SELECT EmpId from Pumper";

                                            $result=$conn->query($sql);

                                            if($result->num_rows>0){
                                                while($row=$result->fetch_assoc()){
                                                $n=$row['EmpId'];
                                                echo "<option value='$n'>".$row['EmpId']."</option>";

                                                $count++;
                                                }
                                            }
                                            $conn -> close();
                                        ?>
                                    <option>All</option>
                                    </select><br><br><br>
                            
                                    <center><input type="submit" value="Submit"></center><br><br>

                                <?php
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        $conn = dbConnect();
                                        $EmpId = $_POST['empid'];
                                    
                                        if (isset($EmpId)) {

                                            if ($EmpId == 'All') {
                                                $sql = "SELECT NIC, EmpId, FirstName, LastName, DOB, Address, TelephoneNo, BasicSalary, Allowances, OTRate FROM pumper ";
                                            $result = $conn->query($sql);
                                            
                                            echo '<table class="blueTable"><caption>Pumper Details</caption><tr><th>NIC</th><th>PumperId</th><th>Name</th><th>DOB</th><th>Address</th><th>TelephoneNo</th><th>BasicSalary</th><th>Allowances</th><th>OTRate</th></tr>';

                                            if ($result->num_rows > 0) {
                                               
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {

                                                echo "<tr><td>" . $row["NIC"]. "</td><td>" . $row["EmpId"]. "</td><td>" . $row["FirstName"]. " " . $row["LastName"]. "</td><td>" . $row["DOB"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["TelephoneNo"]. "</td><td>" . $row["BasicSalary"]. "</td><td>" . $row["Allowances"]. "</td><td>" . $row["OTRate"]. "</td></tr>";
                                                }
                                            echo "</table><br><br>";

                                                $sql = "SELECT NIC, EmpId, FirstName, LastName, DOB, Address, TelephoneNo, Email, Type, BasicSalary, Allowances FROM employee ";
                                                $result = $conn->query($sql);
                                            
                                                echo '<table class="blueTable"><caption>Employee Details</caption><tr><th>NIC</th><th>Employee Id</th><th>Name</th><th>DOB</th><th>Address</th><th>TelephoneNo</th><th>Email</th><th>Emp Type</th><th>BasicSalary</th><th>Allowances</th></tr>';

                                            if ($result->num_rows > 0) {
                                               
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {

                                                echo "<tr><td>" . $row["NIC"]. "</td><td>" . $row["EmpId"]. "</td><td>" . $row["FirstName"]. " " . $row["LastName"]. "</td><td>" . $row["DOB"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["TelephoneNo"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["Type"]. "</td><td>" . $row["BasicSalary"]. "</td><td>" . $row["Allowances"]. "</td></tr>";
                                                }
                                            echo "</table>";
                                            }
                                            }
                                            } 
                                            else {
                                                $Tag = substr( $EmpId, 0, 3 );
                                               
                                                if (substr( $EmpId, 0, 4 ) === "PUMP") {
                                                    
                                                    $sql = "SELECT NIC, EmpId, FirstName, LastName, DOB, Address, TelephoneNo, BasicSalary, Allowances, OTRate FROM pumper WHERE EmpId = '$EmpId'";
                                            $result = $conn->query($sql);
                                            
                                            echo '<table class="blueTable"><caption>Pumper Details</caption><tr><th>NIC</th><th>PumperId</th><th>Name</th><th>DOB</th><th>Address</th><th>TelephoneNo</th><th>BasicSalary</th><th>Allowances</th><th>OTRate</th></tr>';
                                            if (!$result) {
                                                echo "Err:". $conn->error;
                                            }

                                            if ($result->num_rows > 0) {
                                               
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {

                                                    echo "<tr><td>" . $row["NIC"]. "</td><td>" . $row["EmpId"]. "</td><td>" . $row["FirstName"]. " " . $row["LastName"]. "</td><td>" . $row["DOB"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["TelephoneNo"]. "</td><td>" . $row["BasicSalary"]. "</td><td>" . $row["Allowances"]. "</td><td>" . $row["OTRate"]. "</td></tr>";
                                                }
                                            echo "</table><br><br>";
                                            }
                                            } 
                                            else if ($Tag === "EMP") {
                                                $sql = "SELECT NIC, EmpId, FirstName, LastName, DOB, Address, TelephoneNo, Email, Type, BasicSalary, Allowances FROM employee WHERE EmpId = '$EmpId' ";
                                                $result = $conn->query($sql);
                                            

                                            echo '<table class="blueTable"><caption>Employee Details</caption><tr><th>NIC</th><th>Employee Id</th><th>Name</th><th>DOB</th><th>Address</th><th>TelephoneNo</th><th>Email</th><th>Emp Type</th><th>BasicSalary</th><th>Allowances</th></tr>';
                                            
                                            if ($result->num_rows > 0) {
                                               
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {

                                                    echo "<tr><td>" . $row["NIC"]. "</td><td>" . $row["EmpId"]. "</td><td>" . $row["FirstName"]. " " . $row["LastName"]. "</td><td>" . $row["DOB"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["TelephoneNo"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["Type"]. "</td><td>" . $row["BasicSalary"]. "</td><td>" . $row["Allowances"]. "</td></tr>";
                                                }
                                            echo "</table><br><br>";

                                            }
                                            
                                        }
                                        }
                                        }
                                        $conn -> close();
                                    }
                                ?>   
                                </form>
      
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

        <!-- Footer -->
        <?php include 'include/footer.php' ?>

    </body>
</html>
