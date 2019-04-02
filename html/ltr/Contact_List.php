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
//            function preventBack() {
//                window.history.forward();
//            }
//            setTimeout("preventBack()", 0);
//            window.onunload = function () {
//                null
//            };
            function reloadPage() {
                var data = window.location.href.split("?")[1];
                var iddata = data.split("&")[1];
                window.location = window.location.href.split("?")[0] + "?" + iddata;
                
            }

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
                            <h4 class="page-title">Contact List</h4>
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
                                    <h5 class="card-title">Contact List</h5>
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead style="background-color: skyblue;">
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Contry Code</th>
                                                    <th>Contact Number</th>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            parse_str($_SERVER['QUERY_STRING'], $output);
                                            $postData = array(
                                                'id' => print_r($output['id'], TRUE)
                                            );
                                            $jsonData = json_encode($postData);
                                            $get_data = callAPI('POST', 'https://switlover.herokuapp.com/api/singleUser', json_encode($postData));
                                            $response = json_decode($get_data, true);
                                            ?>

                                            <tbody>
                                                <?php
                                                if ($response != NIL) {
                                                    for ($i = 0; $i < count($response["userdata"]); $i++) {

                                                        for ($j = 0; $j < count($response["userdata"][$i]["Contact_List"]); $j++) {
                                                            ?>
                                                            <tr>
                                                                <td><?php
                                                                    echo $j + 1;
                                                                    ?></td>
                                                                <td><?php
                                                                    echo $response["userdata"][$i]["Contact_List"][$j]["code"];
                                                                    ?></td>
                                                                <td><?php echo $response["userdata"][$i]["Contact_List"][$j]["number"]; ?></td>
                                                                <td><?php echo $response["userdata"][$i]["Contact_List"][$j]["name"]; ?></td>
                                                                <td>
                                                                    <form>
                                                                        <?php if ($response["userdata"][$i]["Contact_List"][$j]["isRemovedByAdmin"] == 0 && $response["userdata"][$i]["Contact_List"][$j]["isRemovedByUser"] == 0) { ?>
                                                                            <input type="submit" name="action" value="Remove" class="btn btn-outline-danger btn-sm"/>
                                                                        <?php } else { ?>
                                                                            <input type="submit" name="action" value="Put Back" class="btn btn-outline-warning btn-sm"/>
                                                                        <?php } ?>
                                                                        <input type="hidden" value="<?php echo $response["userdata"][$i]["_id"]; ?>" name="id"/>
                                                                        <input type="hidden" value="<?php echo $response["userdata"][$i]["Contact_List"][$j]["number"]; ?>" name="number"/>
                                                                        <!--<input type="submit" name="action" value="Delete" class="btn btn-outline-danger btn-sm"/>-->
                                                                    </form>
                                                                </td>
                                                            </tr>

                                                            <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                                <?php
                                                if (isset($_REQUEST['action'])) {
                                                    if ($_REQUEST['action'] == "Remove" || $_REQUEST['action'] == "Put Back") {
                                                        $postData = array(
                                                            'id' => $_REQUEST['id'],
                                                            'number' => $_REQUEST['number']
                                                        );
                                                        $jsonData = json_encode($postData);
//                                                        echo $jsonData;
                                                        $get_data = callAPI('POST', 'https://switlover.herokuapp.com/api/blockNumber', json_encode($postData));
                                                        $response1 = json_decode($get_data, true);
                                                        if ($response1["status"] == 1) {
                                                            echo '<script type="text/javascript">',
                                                            'reloadPage();',
                                                            '</script>'
                                                            ;
                                                        }
                                                    }
                                                }
                                                ?>
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
