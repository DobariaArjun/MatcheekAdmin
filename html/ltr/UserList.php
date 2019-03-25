<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/fevicon.png">
        <title>Matcheek - Admin panel</title>
        <link rel="stylesheet" type="text/css" href="../../assets/extra-libs/multicheck/multicheck.css">
        <link href="../../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="../../dist/css/style.min.css" rel="stylesheet">

        <script type="text/javascript" >
            function preventBack() {
                window.history.forward();
            }
            setTimeout("preventBack()", 0);
            window.onunload = function () {
                null
            };

            function showMore() {
                var showmore = document.getElementById("showmore").value;
                alert(showmore);
            }

            function block() {
                var block = document.getElementById("block").value;
                alert(block);
            }

            function deleteUser() {
                var deleteUser = document.getElementById("deleteUser").value;
                alert(deleteUser);
            }
        </script> 
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
        <div id="main-wrapper">
            <?php include 'Header.php'; ?>
            <?php include 'leftSideBar.php'; ?>
            <div class="page-wrapper">
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title">Total Users</h4>
                            <div class="ml-auto text-right">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">User List</h5>
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead style="background-color: skyblue;">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Primary Number</th>
                                                    <th>Email Address</th>
                                                    <!--<th>Number not recognized</th>-->
                                                    <!--<th>Contact via app</th>-->
                                                    <!--<th>Total contacts</th>-->
                                                    <!--<th>Number remove ratio</th>-->
                                                    <!--<th>No inapp purchase</th>-->
                                                    <th>Block</th>
                                                    <th>Online</th>
                                                    <th>Deleted</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <?php
                                            $get_data = callAPI('POST', 'https://switlover.herokuapp.com/api/allUser', false);
                                            $response = json_decode($get_data, true);
                                            //echo $response["userdata"];
                                            ?>

                                            <tbody>
                                                <?php
                                                for ($i = 0; $i < count($response["userdata"]); $i++) {
                                                    ?>
                                                    <tr>
                                                        <td><?php
                                                            if (count($response["userdata"][$i]["Username"]) > 0) {
                                                                echo $response["userdata"][$i]["Username"][count($response["userdata"][$i]["Username"]) - 1];
                                                            } else {
                                                                echo '';
                                                            }
                                                            ?></td>
                                                        <td><?php
                                                            $number = $response["userdata"][$i]["Phone_Number"][0]["Number"];
                                                            $code = $response["userdata"][$i]["Phone_Number"][0]["Contry_Code"];
                                                            echo $code . "" . $number;
                                                            ?></td>
                                                        <td><?php echo $response["userdata"][$i]["Email"]["EmailAddress"]; ?></td>
                                                        <!--<td><?php //echo $response["userdata"][$i]["Contact_Not_Recognized"];                               ?></td>-->
                                                        <!--<td><?php //echo $response["userdata"][$i]["Add_New_Number_From_App"];                               ?></td>-->
                                                        <!--<td><?php //echo count($response["userdata"][$i]["Contact_List"]);                               ?></td>-->
                                                        <!--<td><?php //echo $response["userdata"][$i]["Contact_Remove_Ratio"];                               ?></td>-->
                                                        <!--<td><?php //echo $response["userdata"][$i]["Not_In_App_Purchase"];                               ?></td>-->
                                                        <td><?php
                                                            if ($response["userdata"][$i]["is_Block"] == 0) {
                                                                echo "No";
                                                            } else {
                                                                echo 'Yes';
                                                            }
                                                            ?></td>
                                                        <td><?php
                                                            if ($response["userdata"][$i]["is_Online"] == 0) {
                                                                echo "No";
                                                            } else {
                                                                echo 'Yes';
                                                            }
                                                            ?></td>
                                                        <td><?php
                                                            if ($response["userdata"][$i]["is_Deleted"] == 0) {
                                                                echo "No";
                                                            } else {
                                                                echo 'Yes';
                                                            }
                                                            ?></td>
                                                        <td>
                                                            <form>
                                                                <a href="ShowDetailsofUser.php?id=<?php echo $response["userdata"][$i]["_id"]; ?>">
                                                                    <input type="button" name="action" value="Show more" class="btn btn-outline-info btn-sm"/>
                                                                </a>

                                                                <?php if ($response["userdata"][$i]["is_Block"] == 0) { ?>
                                                                    <input type="submit" name="action" value="Block" class="btn btn-outline-warning btn-sm"/>
                                                                <?php } else { ?>
                                                                    <input type="submit" name="action" value="Unblock" class="btn btn-outline-warning btn-sm"/>
                                                                <?php } ?>

                                                                <input type="submit" name="action" value="Delete" class="btn btn-outline-danger btn-sm"/>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    if (isset($_REQUEST['action'])) {
                                                        if ($_REQUEST['action'] == "Block" || $_REQUEST['action'] == "Unblock") {
                                                            $postData = array(
                                                                'id' => $response["userdata"][$i]["_id"]
                                                            );
                                                            $jsonData = json_encode($postData);
                                                            $get_data = callAPI('POST', 'https://switlover.herokuapp.com/api/block_unblock', json_encode($postData));
                                                        }
                                                    }
                                                    ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'footer.php'; ?>
            </div>
        </div>
        <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="../../dist/js/sidebarmenu.js"></script>
        <script src="../../dist/js/custom.min.js"></script>
        <script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
        <script>
            /****************************************
             *       Basic Table                   *
             ****************************************/
            $('#zero_config').DataTable();
        </script>

    </body>

</html>
