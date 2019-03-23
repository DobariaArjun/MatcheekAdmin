<!DOCTYPE html>
<html dir="ltr" lang="en">

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
        $get_data = callAPI('POST', 'https://switlover.herokuapp.com/api/singleUser', json_encode($postData));
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
                                <h4 class="page-title"><?php
                                    if (count($response["userdata"][$i]["Username"]) > 0) {
                                        echo $response["userdata"][$i]["Username"][count($response["userdata"][$i]["Username"]) - 1];
                                    } else {
                                        echo '';
                                    }
                                    ?>'s Details</h4>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-12">
                                <div class="card">

                                    <div class="card-body">
                                        <!--                                        <h4 class="card-title">Username : <?php
//                                            if (count($response["userdata"][$i]["Username"]) > 0) {
//                                                echo $response["userdata"][$i]["Username"][count($response["userdata"][$i]["Username"]) - 1];
//                                            } else {
//                                                echo '';
//                                            }
                                        ?></h4>-->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h4>Username : </h4>
                                            </div>
                                            <div class="col-md-3">
                                                <h4><?php
                                                    if (count($response["userdata"][$i]["Username"]) > 0) {
                                                        echo $response["userdata"][$i]["Username"][count($response["userdata"][$i]["Username"]) - 1];
                                                    } else {
                                                        echo '';
                                                    }
                                                    ?></h4>
                                            </div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Primary Number : </h4></div>
                                            <div class="col-md-3"><h4><?php
                                                    $number = $response["userdata"][$i]["Phone_Number"][0]["Number"];
                                                    $code = $response["userdata"][$i]["Phone_Number"][0]["Contry_Code"];
                                                    echo $code . "" . $number;
                                                    ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Email Address : </h4></div>
                                            <div class="col-md-3"><h4><?php echo $response["userdata"][$i]["Email"]["EmailAddress"]; ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Power of match : </h4></div>
                                            <div class="col-md-3"><h4><?php
                                                    if ($response["userdata"][$i]["PowerID"]["Power_Of_Match"] == 0) {
                                                        echo "Desabled";
                                                    } else {
                                                        echo "Enabled";
                                                    }
                                                    ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Power of time : </h4></div>
                                            <div class="col-md-3"><h4><?php
                                                    if ($response["userdata"][$i]["PowerID"]["Power_Of_Time"] == 0) {
                                                        echo "Desabled";
                                                    } else {
                                                        echo "Enabled";
                                                    }
                                                    ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Golden power : </h4></div>
                                            <div class="col-md-3"><h4><?php
                                                    if ($response["userdata"][$i]["PowerID"]["Golden_Power"] == 0) {
                                                        echo "Desabled";
                                                    } else {
                                                        echo "Enabled";
                                                    }
                                                    ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Language of app : </h4></div>
                                            <div class="col-md-3"><h4><?php echo $response["userdata"][$i]["language"]; ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Total liked contacts : </h4></div>
                                            <div class="col-md-3"><h4><?php echo count($response["userdata"][$i]["Like"]); ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Match 2 out 2 ratio : </h4></div>
                                            <div class="col-md-3"><h4><?php echo $response["userdata"][$i]["Match_Ratio"]["Two_Out_2_Ratio"]; ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Match 1 out 1 ratio : </h4></div>
                                            <div class="col-md-3"><h4><?php echo $response["userdata"][$i]["Match_Ratio"]["One_Out_1_Ratio"]; ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Match anonymous chat : </h4></div>
                                            <div class="col-md-3"><h4><?php echo $response["userdata"][$i]["Match_Ratio"]["Anonymous_Chat_Ratio"]; ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Contacts not recognized : </h4></div>
                                            <div class="col-md-3"><h4><?php echo $response["userdata"][$i]["Contact_Not_Recognized"]; ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Contacts add via app : </h4></div>
                                            <div class="col-md-3"><h4><?php echo $response["userdata"][$i]["Add_New_Number_From_App"]; ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Number of contact : </h4></div>
                                            <div class="col-md-3"><h4><?php echo count($response["userdata"][$i]["Contact_List"]); ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Contacts remove ratio : </h4></div>
                                            <div class="col-md-3"><h4><?php echo $response["userdata"][$i]["Contact_Remove_Ratio"]; ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>Not yet in-app purchase : </h4></div>
                                            <div class="col-md-3"><h4><?php echo $response["userdata"][$i]["Not_In_App_Purchase"]; ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>User is block : </h4></div>
                                            <div class="col-md-3"><h4><?php
                                                    if ($response["userdata"][$i]["is_Block"] == 0) {
                                                        echo "No";
                                                    } else {
                                                        echo 'Yes';
                                                    }
                                                    ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>User is online : </h4></div>
                                            <div class="col-md-3"><h4><?php
                                                    if ($response["userdata"][$i]["is_Online"] == 0) {
                                                        echo "No";
                                                    } else {
                                                        echo 'Yes';
                                                    }
                                                    ?></h4></div>
                                        </div>
                                        <div><p></p></div>
                                        <div class="row">
                                            <div class="col-md-3"><h4>User is deleted : </h4></div>
                                            <div class="col-md-3"><h4><?php
                                                    if ($response["userdata"][$i]["is_Deleted"] == 0) {
                                                        echo "No";
                                                    } else {
                                                        echo 'Yes';
                                                    }
                                                    ?></h4></div>
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