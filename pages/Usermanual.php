<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fuel Station Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/table.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2 class="navbar-brand">Fuel Station Management System</h2>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Login</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="Contact.php"><i class="fa fa-edit fa-fw"></i> Contact Details</a>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> User manual<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Stock Levels<span class="fa arrow"></span></a>
                            
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            
            
            <div class="row">
                <div class="col-lg-8">
                    <h2>Fuel IDs</h2>

                            <table class="blueTable">
                              <tr>
                                <th>Fuel ID</th>
                                <th>Description</th>
                              </tr>
                              <tr>
                                <td>PET921</td>
                                <td>Petrol 92 OCTANE</td>
                              </tr>
                              <tr>
                                <td>PET951</td>
                                <td>Petrol 95 OCTANE</td>
                              </tr>
                              <tr>
                                <td>LAD001</td>
                                <td>Lanka Auto Diesel</td>
                              </tr>
                              <tr>
                                <td>LSD001</td>
                                <td>Lanaka Super Diesel</td>
                              </tr>
                              <tr>
                                <td>KERO001</td>
                                <td>Kerosine</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                              </tr>
                            </table><br><br>

                            <h2>Lubricant ID</h2>

                            <table class="blueTable">
                              <tr>
                                <th>Lubricant ID</th>
                                <th>Description</th>
                              </tr>
                              <tr>
                                <td>BTWTR1500</td>
                                <td>Battery Water 1500ml</td>
                              </tr>
                              <tr>
                                <td>BATWTR0750</td>
                                <td>Battery Water 1500ml</td>
                              </tr>
                              <tr>
                                <td>CARWASH0001</td>
                                <td>Britol Car Wash</td>
                              </tr>
                              <tr>
                                <td>CARWASH0002</td>
                                <td>CAR WASH 1L</td>
                              </tr>
                              <tr>
                                <td>FRKOIL0001</td>
                                <td>Hyra Cepetco Fork Oil</td>
                              </tr>
                              <tr>
                                <td>DOT4050001</td>
                                <td>HYRAX - DOT 4 500ML</td>
                              </tr>
                              <tr>
                                <td>GRCAS00180</td>
                                <td>HYRAX - GREASE 180KG</td>
                              </tr>
                              <tr>
                                <td>2T00000001</td>
                                <td>HYRAX - 2T 1L</td>
                              </tr>
                            </table><br><br>

                              <h2>Other IDs</h2>
                            <table class="blueTable">
                              <tr>
                                <th>Others</th>
                                <th>ID type</th>
                              </tr>
                              <tr>
                                <td>Employees(Owner, Manager, Cashier, Data Entry Operator )</td>
                                <td>EMP000</td>
                              </tr>
                              <tr>
                                <td>Pumpers</td>
                                <td>PUMPER000</td>
                              </tr>
                              <tr>
                                <td>Pumps</td>
                                <td>PUMPP000</td>
                              </tr>
                              <tr>
                                <td>Tanks</td>
                                <td>TP000</td>
                              </tr>
                              
                            </table><br><br>

                            <h2>Pump IDs Connected to Each Tanks</h2>
                            <table class="blueTable">
                              <tr>
                                <th>Pump ID</th>
                                <th>Tank ID</th>
                              </tr>
                              <tr>
                                <td>PUMPP001</td>
                                <td>TP001</td>
                              </tr>
                              <tr>
                                <td>PUMPP002</td>
                                <td>TP002</td>
                              </tr>
                              <tr>
                                <td>PUMPP001</td>
                                <td>TP001</td>
                              </tr>
                              <tr>
                                <td>PUMPP0001</td>
                                <td>T0001</td>
                              </tr>
                              <tr>
                                <td>PUMPP0002</td>
                                <td>T0001</td>
                              </tr>
                              <tr>
                                <td>PUMPP003</td>
                                <td>TP0002</td>
                              </tr>
                              <tr>
                                <td>PUMPK001</td>
                                <td>TK001</td>
                              </tr>
                            </table><br><br>

                            <h2>Fuel IDs Contained in Each Tanks</h2>
                            <table class="blueTable">
                              <tr>
                                <th>Tank ID</th>
                                <th>Fuel ID</th>
                              </tr>
                              <tr>
                                <td>TP001</td>
                                <td>PET921</td>
                              </tr>
                              <tr>
                                <td>TP002</td>
                                <td>PET951</td>
                              </tr>
                              <tr>
                                <td>T0001</td>
                                <td>LAD001</td>
                              </tr>
                              <tr>
                                <td>T0002</td>
                                <td>LSD001</td>
                              </tr>
                              <tr>
                                <td>TK001</td>
                                <td>KERO001</td>
                              </tr>
                            </table><br><br>

                </div>
                <!-- /.col-lg-8 -->
                <!-- <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i>Stock Level
                                    
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> Stock level
                                    
                                </a>

                            </div>
                        </div>
                        
                    </div>
                    
                    
                </div> -->
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <?php include 'include/footer.php' ?>
</body>

</html>




<!--  <h2>Fuel Codes</h2>

                            <table>
                              <tr>
                                <th>Item Code</th>
                                <th>Description</th>
                              </tr>
                              <tr>
                                <td>PET921</td>
                                <td>P</td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td></td>
                              </tr>
                            </table><br><br>

                            <h2>Lubricant Codes</h2>

                            <table>
                              <tr>
                                <th>Item Code</th>
                                <th>Description</th>
                              </tr>
                              <tr>
                                <td>BTWTR1500</td>
                                <td>Battery Water 1500ml</td>
                              </tr>
                              <tr>
                                <td>BATWTR0750</td>
                                <td>Battery Water 1500ml</td>
                              </tr>
                              <tr>
                                <td>CARWASH0001</td>
                                <td>Britol Car Wash</td>
                              </tr>
                              <tr>
                                <td>CARWASH0002</td>
                                <td>CAR WASH 1L</td>
                              </tr>
                              <tr>
                                <td>FRKOIL0001</td>
                                <td>Hyra Cepetco Fork Oil</td>
                              </tr>
                              <tr>
                                <td>DOT4050001</td>
                                <td>HYRAX - DOT 4 500ML</td>
                              </tr>
                              <tr>
                                <td>GRCAS00180</td>
                                <td>HYRAX - GREASE 180KG</td>
                              </tr>
                              <tr>
                                <td>2T00000001</td>
                                <td>HYRAX - 2T 1L</td>
                              </tr>
                            </table> -->