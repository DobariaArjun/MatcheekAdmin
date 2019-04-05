<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include './APIBaseURL.php'; ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/fevicon.png">
        <title>Matcheek - Admin panel</title>
        <link href="../../dist/css/style.min.css" rel="stylesheet">
    </head>

    <?PHP

    function callAPI($method, $url, $data) {
        $curl = curl_init();

        switch ($method) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'APIKEY: 111111111111111111111',
            'Content-Type: application/json',
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        // EXECUTE:
        $result = curl_exec($curl);
        if (!$result) {
            die("Connection Failure");
        }
        curl_close($curl);
        return $result;
    }
    ?>

    <body>
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <?php
        parse_str($_SERVER['QUERY_STRING'], $output);
        $postData = array(
            'id' => print_r($output['id'], TRUE)
        );
        $jsonData = json_encode($postData);
        $get_data = callAPI('POST', $BASE_URL.'singleUser', json_encode($postData));
        $response = json_decode($get_data, true);
        ?>
        <div id="main-wrapper">
            <?php include './Header.php'; ?>
            <?php include './leftSideBar.php'; ?>
            <div class="page-wrapper">
                <div class="page-breadcrumb">
                    <div class="row">
                        <?php
                        for ($i = 0; $i < count($response["userdata"]); $i++) {
                            ?>
                            <div class="col-12 d-flex no-block align-items-center">
                                <h3 class="page-title"><?php
                                    if (count($response["userdata"][$i]["Username"]) > 0) {
                                        echo $response["userdata"][$i]["Username"][count($response["userdata"][$i]["Username"]) - 1];
                                    } else {
                                        echo '';
                                    }
                                    ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 col-xlg-3">
                                                <div class="card card-hover">
                                                    <div class="box bg-cyan">
                                                        <div class="card card-body row text-white bg-cyan">
                                                            <h3>Matcheek Notification</h3>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"> <h4>Play a sound for each notification received : </h4> </div> 
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Play a sound for each message received : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Likes : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Matches : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Messages : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Power of time : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Promotions : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xlg-3">
                                                <div class="card card-hover">
                                                    <div class="box bg-info">
                                                        <div class="card card-body row text-white bg-info">
                                                            <h3>In App Notification</h3>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"> <h4>Play a sound for each notification received : </h4> </div> 
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Play a sound for each message received : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Likes : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Matches : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Messages : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Power of time : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div> 
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Promotions : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 col-xlg-3">
                                                <div class="card card-hover">
                                                    <div class="box bg-success">
                                                        <div class="card card-body row text-white bg-success">
                                                            <h3>Email Notification</h3>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"> <h4>Frequency : </h4> </div> 
                                                            <div class="col-md-6 text-white"> <h4>Once a week</h4> </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Newsletters : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Promotions : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Likes : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Matches : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Messages : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Power of time : </h4></div>
                                                            <div class="col-md-6 text-white"> <h4>On</h4> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include './footer.php'; ?>
            </div>
        </div>
        <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src="../../dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="../../dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../../dist/js/custom.min.js"></script>
    </body>

</html>