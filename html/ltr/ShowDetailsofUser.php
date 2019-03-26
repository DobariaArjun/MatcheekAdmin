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
        <style>
            body{
                margin-top: auto;
                background-color: #f1f1f1;
            }
            .border{
                border-bottom:1px solid #F1F1F1;
                margin-bottom:10px;
            }
            .main-secction{
                box-shadow: 10px 10px 10px;
            }
            .image-section{
                padding: 0px;
            }
            .image-section img{
                width: 100%;
                height:250px;
                position: relative;
            }
            .user-image{
                position: absolute;
                margin-top:-50px;
            }
            .user-left-part{
                margin: 0px;
            }
            .user-image img{
                width:100px;
                height:100px;
            }
            .user-profil-part{
                padding-bottom:30px;
                background-color:#FAFAFA;
            }
            .follow{    
                margin-top:70px;   
            }
            .user-detail-row{
                margin:0px; 
            }
            .user-detail-section2 p{
                font-size:12px;
                padding: 0px;
                margin: 0px;
            }
            .user-detail-section2{
                margin-top:10px;
            }
            .user-detail-section2 span{
                color:#7CBBC3;
                font-size: 20px;
            }
            .user-detail-section2 small{
                font-size:12px;
                color:#D3A86A;
            }
            .profile-right-section{
                padding: 20px 0px 10px 15px;
                background-color: #FFFFFF;  
            }
            .profile-right-section-row{
                margin: 0px;
            }
            .profile-header-section1 h1{
                font-size: 25px;
                margin: 0px;
            }
            .profile-header-section1 h5{
                color: #0062cc;
            }
            .req-btn{
                height:30px;
                font-size:12px;
            }
            .profile-tag{
                padding: 10px;
                border:1px solid #F6F6F6;
            }
            .profile-tag p{
                font-size: 12px;
                color:black;
            }
            .profile-tag i{
                color:#ADADAD;
                font-size: 20px;
            }
            .image-right-part{
                background-color: #FCFCFC;
                margin: 0px;
                padding: 5px;
            }
            .img-main-rightPart{
                background-color: #FCFCFC;
                margin-top: auto;
            }
            .image-right-detail{
                padding: 0px;
            }
            .image-right-detail p{
                font-size: 12px;
            }
            .image-right-detail a:hover{
                text-decoration: none;
            }
            .image-right img{
                width: 100%;
            }
            .image-right-detail-section2{
                margin: 0px;
            }
            .image-right-detail-section2 p{
                color:#38ACDF;
                margin:0px;
            }
            .image-right-detail-section2 span{
                color:#7F7F7F;
            }

            .nav-link{
                font-size: 1.2em;    
            }
        </style>
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
                                    <div class="col-md-12 col-sm-12 col-xs-12 image-section">
                                        <img src="https://png.pngtree.com/thumb_back/fw800/back_pic/00/08/57/41562ad4a92b16a.jpg">
                                    </div>
                                    <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                                        <?php if ($response["userdata"][$i]["Profile_Pic"] == "") { ?>
                                            <img src="https://www.jamf.com/jamf-nation/img/default-avatars/generic-user-purple.png" class="rounded-circle">
                                        <?php } else { ?>
                                            <img src="<?php echo $response["userdata"][$i]["Profile_Pic"] ?>" class="rounded-circle">
                                        <?php } ?>

                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 col-xlg-3">
                                                <div class="card card-hover">
                                                    <div class="box bg-cyan">
                                                        <div class="row">
                                                            <div class="col-md-6 text-white">
                                                                <h4>Username : </h4>
                                                            </div>
                                                            <div class="col-md-6 text-white">
                                                                <h4><?php
                                                                    if (count($response["userdata"][$i]["Username"]) > 0) {
                                                                        echo $response["userdata"][$i]["Username"][count($response["userdata"][$i]["Username"]) - 1];
                                                                    } else {
                                                                        echo '';
                                                                    }
                                                                    ?></h4>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Primary Number : </h4></div>
                                                            <div class="col-md-6 text-white"><h4><?php
                                                                    $number = $response["userdata"][$i]["Phone_Number"][0]["Number"];
                                                                    $code = $response["userdata"][$i]["Phone_Number"][0]["Contry_Code"];
                                                                    echo $code . "" . $number;
                                                                    ?></h4></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Email Address : </h4></div>
                                                            <div class="col-md-6 text-white"><h4><?php echo $response["userdata"][$i]["Email"]["EmailAddress"]; ?></h4></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xlg-3">
                                                <div class="card card-hover">
                                                    <div class="box bg-info">
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Power of match : </h4></div>
                                                            <div class="col-md-6 text-white"><h4><?php
                                                                    if ($response["userdata"][$i]["PowerID"]["Power_Of_Match"] == 0) {
                                                                        echo "Disable";
                                                                    } else {
                                                                        echo "Enabled";
                                                                    }
                                                                    ?></h4></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Power of time : </h4></div>
                                                            <div class="col-md-6 text-white"><h4><?php
                                                                    if ($response["userdata"][$i]["PowerID"]["Power_Of_Time"] == 0) {
                                                                        echo "Disable";
                                                                    } else {
                                                                        echo "Enabled";
                                                                    }
                                                                    ?></h4></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Golden power : </h4></div>
                                                            <div class="col-md-6 text-white"><h4><?php
                                                                    if ($response["userdata"][$i]["PowerID"]["Golden_Power"] == 0) {
                                                                        echo "Disable";
                                                                    } else {
                                                                        echo "Enabled";
                                                                    }
                                                                    ?></h4></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 col-xlg-3">
                                                <div class="card card-hover">
                                                    <div class="box bg-warning">
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Match 2 out 2 ratio : </h4></div>
                                                            <div class="col-md-6 text-white"><h4><?php echo $response["userdata"][$i]["Match_Ratio"]["Two_Out_2_Ratio"]; ?></h4></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Match 1 out 1 ratio : </h4></div>
                                                            <div class="col-md-6 text-white"><h4><?php echo $response["userdata"][$i]["Match_Ratio"]["One_Out_1_Ratio"]; ?></h4></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Match anonymous chat : </h4></div>
                                                            <div class="col-md-6 text-white"><h4><?php echo $response["userdata"][$i]["Match_Ratio"]["Anonymous_Chat_Ratio"]; ?></h4></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xlg-3">
                                                <div class="card card-hover">
                                                    <div class="box bg-success">
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Is blocked? : </h4></div>
                                                            <div class="col-md-6 text-white"><h4><?php
                                                                    if ($response["userdata"][$i]["is_Block"] == 0) {
                                                                        echo "No";
                                                                    } else {
                                                                        echo 'Yes';
                                                                    }
                                                                    ?></h4></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Is online? : </h4></div>
                                                            <div class="col-md-6 text-white"><h4><?php
                                                                    if ($response["userdata"][$i]["is_Online"] == 0) {
                                                                        echo "No";
                                                                    } else {
                                                                        echo 'Yes';
                                                                    }
                                                                    ?></h4></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Is deleted? : </h4></div>
                                                            <div class="col-md-6 text-white"><h4><?php
                                                                    if ($response["userdata"][$i]["is_Deleted"] == 0) {
                                                                        echo "No";
                                                                    } else {
                                                                        echo 'Yes';
                                                                    }
                                                                    ?></h4></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 col-xlg-3">
                                                <div class="card card-hover">
                                                    <div class="box bg-danger">
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Number of contact : </h4></div>
                                                            <div class="col-md-3 text-white"><h4><?php echo count($response["userdata"][$i]["Contact_List"]); ?></h4></div>
                                                            <div class="col-md-3 text-white"><a href="#" class="text-white">See Contacts</a></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Total liked contacts : </h4></div>
                                                            <div class="col-md-3 text-white"><h4><?php echo count($response["userdata"][$i]["Like"]); ?></h4></div>
                                                            <div class="col-md-3 text-white"><a href="#" class="text-white">See Contacts</a></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Contacts not recognized : </h4></div>
                                                            <div class="col-md-3 text-white"><h4><?php echo $response["userdata"][$i]["Contact_Not_Recognized"]; ?></h4></div>
                                                            <div class="col-md-3 text-white"><a href="#" class="text-white">See Contacts</a></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Contacts add via app : </h4></div>
                                                            <div class="col-md-3 text-white"><h4><?php echo $response["userdata"][$i]["Add_New_Number_From_App"]; ?></h4></div>
                                                            <div class="col-md-3 text-white"><a href="#" class="text-white">See Contacts</a></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Contacts remove ratio : </h4></div>
                                                            <div class="col-md-3 text-white"><h4><?php echo $response["userdata"][$i]["Contact_Remove_Ratio"]; ?></h4></div>
                                                            <div class="col-md-3 text-white"><a href="#" class="text-white">See Contacts</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xlg-3">
                                                <div class="card card-hover">
                                                    <div class="box bg-dark">
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Not yet in-app purchase : </h4></div>
                                                            <div class="col-md-6 text-white"><h4><?php echo $response["userdata"][$i]["Not_In_App_Purchase"]; ?></h4></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-white"><h4>Language of app : </h4></div>
                                                            <div class="col-md-6 text-white"><h4><?php echo $response["userdata"][$i]["language"]; ?></h4></div>
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