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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>

        <style>
            dropbtn {
                background-color: #28b779;
                color: black;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #28b779;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: #000000;}

            .dropdown:hover .dropdown-content {
                display: block;
            }
            .dropdown:hover .dropbtn {
                background-color: #3e8e41;

            }
            /* The container */
            .container {
                display: block;
                position: relative;
                padding-left: 35px;
                margin-bottom: 12px;
                cursor: pointer;
                font-size: 22px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            /* Hide the browser's default checkbox */
            .container input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
                height: 0;
                width: 0;
            }

            /* Create a custom checkbox */
            .checkmark {
                position: absolute;
                top: 0;
                left: 0;
                height: 25px;
                width: 25px;
                background-color: #eee;
            }

            /* On mouse-over, add a grey background color */
            .container:hover input ~ .checkmark {
                background-color: #ccc;
            }

            /* When the checkbox is checked, add a blue background */
            .container input:checked ~ .checkmark {
                background-color: #2196F3;
            }

            /* Create the checkmark/indicator (hidden when not checked) */
            .checkmark:after {
                content: "";
                position: absolute;
                display: none;
            }

            /* Show the checkmark when checked */
            .container input:checked ~ .checkmark:after {
                display: block;
            }

            /* Style the checkmark/indicator */
            .container .checkmark:after {
                left: 9px;
                top: 5px;
                width: 5px;
                height: 10px;
                border: solid white;
                border-width: 0 3px 3px 0;
                -webkit-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                transform: rotate(45deg);
            }
        </style>
        <script>
            $(document).ready(function () {
                var id = window.location.href.split("id=")[1];
                var matcheek_1;
                var matcheek_2;
                var matcheek_3;
                var matcheek_4;
                var matcheek_5;
                var matcheek_6;
                var matcheek_7;
                var phone_1;
                var phone_2;
                var phone_3;
                var phone_4;
                var phone_5;
                var phone_6;
                var phone_7;
                var email_2;
                var email_3;
                var email_4;
                var email_5;
                var email_6;
                var email_7;
                var one;
                var two;
                var three;
                var four;
                var five;

                $("#change").click(function () {
                    if ($("#matcheek_1").is(":checked")) {
                        matcheek_1 = 1;
                    } else if ($("#matcheek_1").is(":not(:checked)")) {
                        matcheek_1 = 0;
                    }

                    if ($("#matcheek_2").is(":checked")) {
                        matcheek_2 = 1;
                    } else if ($("#matcheek_2").is(":not(:checked)")) {
                        matcheek_2 = 0;
                    }

                    if ($("#matcheek_3").is(":checked")) {
                        matcheek_3 = 1;
                    } else if ($("#matcheek_3").is(":not(:checked)")) {
                        matcheek_3 = 0;
                    }

                    if ($("#matcheek_4").is(":checked")) {
                        matcheek_4 = 1;
                    } else if ($("#matcheek_4").is(":not(:checked)")) {
                        matcheek_4 = 0;
                    }

                    if ($("#matcheek_5").is(":checked")) {
                        matcheek_5 = 1;
                    } else if ($("#matcheek_5").is(":not(:checked)")) {
                        matcheek_5 = 0;
                    }

                    if ($("#matcheek_6").is(":checked")) {
                        matcheek_6 = 1;
                    } else if ($("#matcheek_6").is(":not(:checked)")) {
                        matcheek_6 = 0;
                    }

                    if ($("#matcheek_7").is(":checked")) {
                        matcheek_7 = 1;
                    } else if ($("#matcheek_7").is(":not(:checked)")) {
                        matcheek_7 = 0;
                    }

                    if ($("#phone_1").is(":checked")) {
                        phone_1 = 1;
                    } else if ($("#phone_1").is(":not(:checked)")) {
                        phone_1 = 0;
                    }

                    if ($("#phone_2").is(":checked")) {
                        phone_2 = 1;
                    } else if ($("#phone_2").is(":not(:checked)")) {
                        phone_2 = 0;
                    }

                    if ($("#phone_3").is(":checked")) {
                        phone_3 = 1;
                    } else if ($("#phone_3").is(":not(:checked)")) {
                        phone_3 = 0;
                    }

                    if ($("#phone_4").is(":checked")) {
                        phone_4 = 1;
                    } else if ($("#phone_4").is(":not(:checked)")) {
                        phone_4 = 0;
                    }

                    if ($("#phone_5").is(":checked")) {
                        phone_5 = 1;
                    } else if ($("#phone_5").is(":not(:checked)")) {
                        phone_5 = 0;
                    }

                    if ($("#phone_6").is(":checked")) {
                        phone_6 = 1;
                    } else if ($("#phone_6").is(":not(:checked)")) {
                        phone_6 = 0;
                    }

                    if ($("#phone_7").is(":checked")) {
                        phone_7 = 1;
                    } else if ($("#phone_7").is(":not(:checked)")) {
                        phone_7 = 0;
                    }


                    var email_1 = $.trim($('#dd').children("option:selected").val());

                    if (email_1 == "Every Notification") {
                        one = 1;
                    } else {
                        one = 0;
                    }
                    if (email_1 == "Twice a day") {
                        two = 1;
                    } else {
                        two = 0;
                    }
                    if (email_1 == "Once a day") {
                        three = 1;
                    } else {
                        three = 0;
                    }
                    if (email_1 == "Once a week") {
                        four = 1;
                    } else {
                        four = 0;
                    }
                    if (email_1 == "Once a month") {
                        five = 1;
                    } else {
                        five = 0;
                    }

                    if ($("#email_2").is(":checked")) {
                        email_2 = 1;
                    } else if ($("#email_2").is(":not(:checked)")) {
                        email_2 = 0;
                    }

                    if ($("#email_3").is(":checked")) {
                        email_3 = 1;
                    } else if ($("#email_3").is(":not(:checked)")) {
                        email_3 = 0;
                    }

                    if ($("#email_4").is(":checked")) {
                        email_4 = 1;
                    } else if ($("#email_4").is(":not(:checked)")) {
                        email_4 = 0;
                    }

                    if ($("#email_5").is(":checked")) {
                        email_5 = 1;
                    } else if ($("#email_5").is(":not(:checked)")) {
                        email_5 = 0;
                    }

                    if ($("#email_6").is(":checked")) {
                        email_6 = 1;
                    } else if ($("#email_6").is(":not(:checked)")) {
                        email_6 = 0;
                    }

                    if ($("#email_7").is(":checked")) {
                        email_7 = 1;
                    } else if ($("#email_7").is(":not(:checked)")) {
                        email_7 = 0;
                    }
                    $.ajax({
                        url: 'https://switlover.herokuapp.com/api/SetNotificationadmin',
                        type: 'POST',
                        data: {data: {userID: id,
                                matcheek: {
                                    play_sound_for_every_notification: matcheek_1,
                                    play_sound_for_every_message: matcheek_2,
                                    likes: matcheek_3,
                                    matches: matcheek_4,
                                    messages: matcheek_5,
                                    power_of_time: matcheek_6,
                                    promotions: matcheek_7
                                },
                                phone: {
                                    play_sound_for_every_notification: phone_1,
                                    play_sound_for_every_message: phone_2,
                                    likes: phone_3,
                                    matches: phone_4,
                                    messages: phone_5,
                                    power_of_time: phone_6,
                                    promotions: phone_7
                                },
                                email: {
                                    frequency: {
                                        every_notification: one,
                                        twice_a_day: two,
                                        once_a_day: three,
                                        once_a_week: four,
                                        once_a_month: five
                                    },
                                    newsletter: email_2,
                                    promotions: email_3,
                                    likes: email_4,
                                    matches: email_5,
                                    messages: email_6,
                                    power_of_time: email_7
                                }
                            }},
                        complete: function ()
                        {
                            window.location = window.location;
                        }
                    });
                    return false;
                });
            });
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
        <?php
        parse_str($_SERVER['QUERY_STRING'], $output);
        $postData = array(
            'id' => print_r($output['id'], TRUE)
        );
        $jsonData = json_encode($postData);
        $get_data = callAPI('POST', $BASE_URL . 'singleUser', json_encode($postData));
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
                                }
                                ?></h3>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <?php
                        parse_str($_SERVER['QUERY_STRING'], $output);
                        $postData1 = array(
                            'id' => print_r($output['id'], TRUE)
                        );
                        $get_data1 = callAPI('POST', $BASE_URL . 'GetNotificationadmin', json_encode($postData1));
                        $response1 = json_decode($get_data1, true);
                        ?>
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
                                                        <div class="col-md-6 text-white" >
                                                            <h4>
                                                                <?php
                                                                if ($response1["userdata"][0]["matcheek"]["play_sound_for_every_notification"] == "0") {
                                                                    ?><label class="container" id="m1">Off
                                                                        <input type="checkbox" id="matcheek_1">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="matcheek_1" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?>
                                                            </h4>
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Play a sound for each message received : </h4></div>
                                                        <div class="col-md-6 text-white"> 
                                                            <h4>
                                                                <?php
                                                                if ($response1["userdata"][0]["matcheek"]["play_sound_for_every_message"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="matcheek_2">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="matcheek_2" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?>
                                                            </h4> 
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Likes : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["matcheek"]["likes"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="matcheek_3">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="matcheek_3" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Matches : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["matcheek"]["matches"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="matcheek_4">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="matcheek_4" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Messages : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["matcheek"]["messages"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="matcheek_5">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="matcheek_5" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Power of time : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["matcheek"]["power_of_time"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="matcheek_6">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="matcheek_6" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Promotions : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["matcheek"]["promotions"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="matcheek_7">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="matcheek_7" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
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
                                                        <div class="col-md-6 text-white" ><h4><?php
                                                                if ($response1["userdata"][0]["phone"]["play_sound_for_every_notification"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="phone_1">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="phone_1" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4></div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Play a sound for each message received : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["phone"]["play_sound_for_every_message"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="phone_2">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="phone_2" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Likes : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["phone"]["likes"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="phone_3">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="phone_3" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Matches : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["phone"]["matches"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="phone_4">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="phone_4" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Messages : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["phone"]["messages"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="phone_5">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="phone_5" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Power of time : </h4></div>
                                                        <div class="col-md-6 text-white"> <h4><?php
                                                                if ($response1["userdata"][0]["phone"]["power_of_time"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="phone_6">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="phone_6" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Promotions : </h4></div>
                                                        <div class="col-md-6 text-white"> <h4><?php
                                                                if ($response1["userdata"][0]["phone"]["promotions"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="phone_7">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="phone_7" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
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
                                                        <div class="col-md-3 text-white"> 

                                                            <select class="text-white bg-success btn-outline-light text-center" id="dd">
                                                                <option value="Every Notification" <?php if ($response1["userdata"][0]["email"]["frequency"]["every_notification"] == "1") { ?>selected<?php } ?>>Every Notification</option>
                                                                <option value="Twice a day" <?php if ($response1["userdata"][0]["email"]["frequency"]["twice_a_day"] == "1") { ?>selected<?php } ?>>Twice a day</option>
                                                                <option value="Once a day" <?php if ($response1["userdata"][0]["email"]["frequency"]["once_a_day"] == "1") { ?>selected<?php } ?>>Once a day</option>
                                                                <option value="Once a week" <?php if ($response1["userdata"][0]["email"]["frequency"]["once_a_week"] == "1") { ?>selected<?php } ?>>Once a week</option>
                                                                <option value="Once a month" <?php if ($response1["userdata"][0]["email"]["frequency"]["once_a_month"] == "1") { ?>selected<?php } ?>>Once a month</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Newsletters : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["email"]["newsletter"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="email_2">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="email_2" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Promotions : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["email"]["promotions"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="email_3">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="email_3" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Likes : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["email"]["likes"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="email_4">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="email_4" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Matches : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["email"]["matches"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="email_5">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="email_5" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Messages : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["email"]["messages"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="email_6">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="email_6" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Power of time : </h4></div>
                                                        <div class="col-md-6 text-white" > <h4><?php
                                                                if ($response1["userdata"][0]["email"]["power_of_time"] == "0") {
                                                                    ?><label class="container">Off
                                                                        <input type="checkbox" id="email_7">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                } else {
                                                                    ?><label class="container">On
                                                                        <input type="checkbox" id="email_7" checked="checked">
                                                                        <span class="checkmark"></span>
                                                                    </label><?php
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h4 class="col-4"></h4>
                                    <h3 class="col-4 text-center btn-danger" id="change">Change</h3>
                                    <h4 class="col-4"></h4>
                                </div>
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