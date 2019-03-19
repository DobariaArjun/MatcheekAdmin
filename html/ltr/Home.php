<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/fevicon.png">
        <title>SwitLover - Admin panel</title>
        <link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet">
        <link href="../../dist/css/style.min.css" rel="stylesheet">
        <script type="text/javascript" >
            function preventBack() {
                window.history.forward();
            }
            setTimeout("preventBack()", 0);
            window.onunload = function () {
                null
            };
        </script> 
    </head>

    <body>

        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <div id="main-wrapper">
            <?php include 'Header.php'; ?>
            <?php include 'leftSideBar.php'; ?>

            <div class="page-wrapper">

                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title">Dashboard</h4>
                            <div class="ml-auto text-right">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white">
                                        <i class="mdi mdi-alert"></i>
                                    </h1>
                                    <h6 class="text-white">Total Not Yet Login User</h6>
                                    <h5 class="text-white">0</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white">
                                        <i class="mdi mdi-chart-areaspline"></i>
                                    </h1>
                                    <h6 class="text-white">Download Of Application Per Hour</h6>
                                    <h5 class="text-white">0</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-warning text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                    <h6 class="text-white">Download Of Application Per Day</h6>
                                    <h5 class="text-white">0</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-2 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white"><i class="fa fa-user m-b-5 font-22"></i></h1>
                                    <h6 class="text-white">Total Users</h6>
                                    <h5 class="text-white">0</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-2 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><i class="fa fa-user m-b-5 font-22"></i></h1>
                                    <h6 class="text-white">Online User</h6>
                                    <h5 class="text-white">0</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                    <h6 class="text-white">Average Time Spent on Application</h6>
                                    <h5 class="text-white">0</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-2 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                                    <h6 class="text-white">Access Application Per Day</h6>
                                    <h5 class="text-white">0</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-2 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                    <h6 class="text-white">Access Application Per Hour</h6>
                                    <h5 class="text-white">0</h5>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <?php include 'footer.php'; ?>
        </div>

        <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="../../dist/js/custom.min.js"></script>

    </body>

</html>
