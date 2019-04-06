<!DOCTYPE html>
<html dir="ltr" lang="en">
    <?php include './APIBaseURL.php'; ?>
    <?php
    parse_str($_SERVER['QUERY_STRING'], $output);
    $postData = array(
        'id' => print_r($output['id'], TRUE)
    );
    $jsonData = json_encode($postData);
    $get_data = callAPI('POST', $BASE_URL . 'singleUserNumber', json_encode($postData));
    $response = json_decode($get_data, true);

    $my_file = 'data/contactSingleUser.txt';
    $handle = fopen($my_file, 'w') or die('Cannot open file:  ' . $my_file);
    fwrite($handle, json_encode($response));

    //Block Number
    function blockNumber() {
        $postData = array(
            'id' => $_REQUEST['id'],
            'number' => $_REQUEST['number']
        );
        $jsonData = json_encode($postData);
        $get_data = callAPI('POST', $BASE_URL . 'blockNumber', json_encode($postData));
        $response1 = json_decode($get_data, true);
    }
    ?>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
        <script>
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "ajax": "data/contactSingleUser.txt",
                    "columnDefs": [{
                            "targets": -1,
                            "data": null,
                            "defaultContent": "<button id='remove' class='btn btn-outline-danger btn-sm'>Remove</button> <button id='put' class='btn btn-outline-warning btn-sm'>Put Back</button>"
                        }]
                });
                $('#example tbody').on('click', '#remove', function () {
                    var data = table.row($(this).parents('tr')).data();
//                    alert(data[4] == "No");
//                    if (data[4] == "Yes" && data[5] == "Yes")
//                    {
//                        $("#remove").hide();
//                        $("#put").show();
//                    }
//                    if (data[4] == "No" && data[5] == "No")
//                    {
//                        $("#put").hide();
//                        $("#remove").show();
//                    }
//                    var jsonObj = [];
                    var dataURL = window.location.href.split("id=")[1];
                    
//                    item = {};
//                    item["id"] = dataURL;
//                    item ["number"] = data[2];
//                    jsonObj.push(item);
//                    alert(jsonObj[0]["id"]);
                    $.ajax({
                        url: 'http://localhost:3000/api/blockNumber',
                        type: 'POST',
                        data: {id: dataURL, number: data[2]},
                        complete: function ()
                        {
                            alert();
//                            if (data[4] == "Yes" && data[5] == "Yes")
//                            {
//                                $("#remove").hide();
//                                $("#put").show();
//                            }
//                            if (data[4] == "No" && data[5] == "No")
//                            {
//                                $("#put").hide();
//                                $("#remove").show();
//                            }
                        }
                    });

                    return false;
                });
            }
            );
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
                                    <h5 class="card-title">User List</h5>
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered">
                                            <thead style="background-color: skyblue;">
                                                <tr>
                                                    <th>Sr. No</th>
                                                    <th>Contry Code</th>
                                                    <th>Contact Number</th>
                                                    <th>Name</th>
                                                    <th>Is Removed By User</th>
                                                    <th>Is Removed By Admin</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
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
