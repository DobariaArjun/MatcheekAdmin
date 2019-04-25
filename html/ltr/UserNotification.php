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
        <script>
            $(document).ready(function () {
                var id = window.location.href.split("id=")[1];
                $("#matcheek_1").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 0;
                    } else {
                        matcheek_1 = 1;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#matcheek_2").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 0;
                    } else {
                        matcheek_2 = 1;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#matcheek_3").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 0;
                    } else {
                        matcheek_3 = 1;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#matcheek_4").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 0;
                    } else {
                        matcheek_4 = 1;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#matcheek_5").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 0;
                    } else {
                        matcheek_5 = 1;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#matcheek_6").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 0;
                    } else {
                        matcheek_6 = 1;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#matcheek_7").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 0;
                    } else {
                        matcheek_7 = 1;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#phone_1").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 0;
                    } else {
                        phone_1 = 1;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#phone_2").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 0;
                    } else {
                        phone_2 = 1;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#phone_3").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 0;
                    } else {
                        phone_3 = 1;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#phone_4").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 0;
                    } else {
                        phone_4 = 1;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#phone_5").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 0;
                    } else {
                        phone_5 = 1;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#phone_6").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 0;
                    } else {
                        phone_6 = 1;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#phone_7").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 0;
                    } else {
                        phone_7 = 1;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#email_1").click(function () {
                    var one;
                    var two;
                    var three;
                    var four;
                    var five;
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#dd').children("option:selected").val());
                    if (email_1 == "Every Notification") {
                        one = 1;
                    } else {
                        one = 0
                    }
                    if (email_1 == "Twice a day") {
                        two = 1;
                    } else {
                        two = 0
                    }
                    if (email_1 == "Once a day") {
                        three = 1;
                    } else {
                        three = 0
                    }
                    if (email_1 == "Once a week") {
                        four = 1;
                    } else {
                        four = 0
                    }
                    if (email_1 == "Once a month") {
                        five = 1;
                    } else {
                        five = 0
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                $("#email_2").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 0;
                    } else {
                        email_2 = 1;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#email_3").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 0;
                    } else {
                        email_3 = 1;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#email_4").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 0;
                    } else {
                        email_4 = 1;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#email_5").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 0;
                    } else {
                        email_5 = 1;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#email_6").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 0;
                    } else {
                        email_6 = 1;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 1;
                    } else {
                        email_7 = 0;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                $("#email_7").click(function () {
                    var matcheek_1 = $.trim($('#matcheek_1').text());
                    if (matcheek_1 == "On") {
                        matcheek_1 = 1;
                    } else {
                        matcheek_1 = 0;
                    }
//                    alert(matcheek_1)
                    var matcheek_2 = $.trim($('#matcheek_2').text());
                    if (matcheek_2 == "On") {
                        matcheek_2 = 1;
                    } else {
                        matcheek_2 = 0;
                    }
//                    alert(matcheek_2)
                    var matcheek_3 = $.trim($('#matcheek_3').text());
                    if (matcheek_3 == "On") {
                        matcheek_3 = 1;
                    } else {
                        matcheek_3 = 0;
                    }
//                    alert(matcheek_3)
                    var matcheek_4 = $.trim($('#matcheek_4').text());
                    if (matcheek_4 == "On") {
                        matcheek_4 = 1;
                    } else {
                        matcheek_4 = 0;
                    }
                    var matcheek_5 = $.trim($('#matcheek_5').text());
                    if (matcheek_5 == "On") {
                        matcheek_5 = 1;
                    } else {
                        matcheek_5 = 0;
                    }
                    var matcheek_6 = $.trim($('#matcheek_6').text());
                    if (matcheek_6 == "On") {
                        matcheek_6 = 1;
                    } else {
                        matcheek_6 = 0;
                    }
                    var matcheek_7 = $.trim($('#matcheek_7').text());
                    if (matcheek_7 == "On") {
                        matcheek_7 = 1;
                    } else {
                        matcheek_7 = 0;
                    }
                    var phone_1 = $.trim($('#phone_1').text());
                    if (phone_1 == "On") {
                        phone_1 = 1;
                    } else {
                        phone_1 = 0;
                    }
                    var phone_2 = $.trim($('#phone_2').text());
                    if (phone_2 == "On") {
                        phone_2 = 1;
                    } else {
                        phone_2 = 0;
                    }
                    var phone_3 = $.trim($('#phone_3').text());
                    if (phone_3 == "On") {
                        phone_3 = 1;
                    } else {
                        phone_3 = 0;
                    }
                    var phone_4 = $.trim($('#phone_4').text());
                    if (phone_4 == "On") {
                        phone_4 = 1;
                    } else {
                        phone_4 = 0;
                    }
                    var phone_5 = $.trim($('#phone_5').text());
                    if (phone_5 == "On") {
                        phone_5 = 1;
                    } else {
                        phone_5 = 0;
                    }
                    var phone_6 = $.trim($('#phone_6').text());
                    if (phone_6 == "On") {
                        phone_6 = 1;
                    } else {
                        phone_6 = 0;
                    }
                    var phone_7 = $.trim($('#phone_7').text());
                    if (phone_7 == "On") {
                        phone_7 = 1;
                    } else {
                        phone_7 = 0;
                    }
                    var email_1 = $.trim($('#email_1').text());
                    if (email_1 == "On") {
                        email_1 = 1;
                    } else {
                        email_1 = 0;
                    }
                    var email_2 = $.trim($('#email_2').text());
                    if (email_2 == "On") {
                        email_2 = 1;
                    } else {
                        email_2 = 0;
                    }
                    var email_3 = $.trim($('#email_3').text());
                    if (email_3 == "On") {
                        email_3 = 1;
                    } else {
                        email_3 = 0;
                    }
                    var email_4 = $.trim($('#email_4').text());
                    if (email_4 == "On") {
                        email_4 = 1;
                    } else {
                        email_4 = 0;
                    }
                    var email_5 = $.trim($('#email_5').text());
                    if (email_5 == "On") {
                        email_5 = 1;
                    } else {
                        email_5 = 0;
                    }
                    var email_6 = $.trim($('#email_6').text());
                    if (email_6 == "On") {
                        email_6 = 1;
                    } else {
                        email_6 = 0;
                    }
                    var email_7 = $.trim($('#email_7').text());
                    if (email_7 == "On") {
                        email_7 = 0;
                    } else {
                        email_7 = 1;
                    }

                    $.ajax({
                        url: 'http://13.59.195.52:3000/api/SetNotificationadmin',
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
                                        every_notification: 0,
                                        twice_a_day: 0,
                                        once_a_day: 1,
                                        once_a_week: 0,
                                        once_a_month: 0
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
                                                        <div class="col-md-6 text-white btn-cyan" id="matcheek_1">
                                                            <h4>
                                                                <?php
                                                                if ($response1["userdata"][0]["matcheek"]["play_sound_for_every_notification"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?>
                                                            </h4>
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Play a sound for each message received : </h4></div>
                                                        <div class="col-md-6 text-white btn-cyan" id="matcheek_2"> 
                                                            <h4>
                                                                <?php
                                                                if ($response1["userdata"][0]["matcheek"]["play_sound_for_every_message"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?>
                                                            </h4> 
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Likes : </h4></div>
                                                        <div class="col-md-6 text-white btn-cyan" id="matcheek_3"> <h4><?php
                                                                if ($response1["userdata"][0]["matcheek"]["likes"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Matches : </h4></div>
                                                        <div class="col-md-6 text-white btn-cyan" id="matcheek_4"> <h4><?php
                                                                if ($response1["userdata"][0]["matcheek"]["matches"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Messages : </h4></div>
                                                        <div class="col-md-6 text-white btn-cyan" id="matcheek_5"> <h4><?php
                                                                if ($response1["userdata"][0]["matcheek"]["messages"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Power of time : </h4></div>
                                                        <div class="col-md-6 text-white btn-cyan" id="matcheek_6"> <h4><?php
                                                                if ($response1["userdata"][0]["matcheek"]["power_of_time"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Promotions : </h4></div>
                                                        <div class="col-md-6 text-white btn-cyan" id="matcheek_7"> <h4><?php
                                                                if ($response1["userdata"][0]["matcheek"]["promotions"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
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
                                                        <div class="col-md-6 text-white btn-info" id="phone_1"><h4><?php
                                                                if ($response1["userdata"][0]["phone"]["play_sound_for_every_notification"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4></div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Play a sound for each message received : </h4></div>
                                                        <div class="col-md-6 text-white btn-info" id="phone_2"> <h4><?php
                                                                if ($response1["userdata"][0]["phone"]["play_sound_for_every_message"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Likes : </h4></div>
                                                        <div class="col-md-6 text-white btn-info" id="phone_3"> <h4><?php
                                                                if ($response1["userdata"][0]["phone"]["likes"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Matches : </h4></div>
                                                        <div class="col-md-6 text-white btn-info" id="phone_4"> <h4><?php
                                                                if ($response1["userdata"][0]["phone"]["matches"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Messages : </h4></div>
                                                        <div class="col-md-6 text-white btn-info" id="phone_5"> <h4><?php
                                                                if ($response1["userdata"][0]["phone"]["messages"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Power of time : </h4></div>
                                                        <div class="col-md-6 text-white btn-info" id="phone_6"> <h4><?php
                                                                if ($response1["userdata"][0]["phone"]["power_of_time"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Promotions : </h4></div>
                                                        <div class="col-md-6 text-white btn-info" id="phone_7"> <h4><?php
                                                                if ($response1["userdata"][0]["phone"]["promotions"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
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
                                                                <option value="Every Notification" <?php if ($response1["userdata"][0]["email"]["frequency"]["every_notification"] == 1) { ?>selected<?php } ?>>Every Notification</option>
                                                                <option value="Twice a day" <?php if ($response1["userdata"][0]["email"]["frequency"]["twice_a_day"] == 1) { ?>selected<?php } ?>>Twice a day</option>
                                                                <option value="Once a day" <?php if ($response1["userdata"][0]["email"]["frequency"]["once_a_day"] == 1) { ?>selected<?php } ?>>Once a day</option>
                                                                <option value="Once a week" <?php if ($response1["userdata"][0]["email"]["frequency"]["once_a_week"] == 1) { ?>selected<?php } ?>>Once a week</option>
                                                                <option value="Once a month" <?php if ($response1["userdata"][0]["email"]["frequency"]["once_a_month"] == 1) { ?>selected<?php } ?>>Once a month</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3 text-white btn-success" id="email_1"> <h4>Change</h4></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Newsletters : </h4></div>
                                                        <div class="col-md-6 text-white btn-success" id="email_2"> <h4><?php
                                                                if ($response1["userdata"][0]["email"]["newsletter"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Promotions : </h4></div>
                                                        <div class="col-md-6 text-white btn-success" id="email_3"> <h4><?php
                                                                if ($response1["userdata"][0]["email"]["promotions"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Likes : </h4></div>
                                                        <div class="col-md-6 text-white btn-success" id="email_4"> <h4><?php
                                                                if ($response1["userdata"][0]["email"]["likes"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Matches : </h4></div>
                                                        <div class="col-md-6 text-white btn-success" id="email_5"> <h4><?php
                                                                if ($response1["userdata"][0]["email"]["matches"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Messages : </h4></div>
                                                        <div class="col-md-6 text-white btn-success" id="email_6"> <h4><?php
                                                                if ($response1["userdata"][0]["email"]["messages"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-white"><h4>Power of time : </h4></div>
                                                        <div class="col-md-6 text-white btn-success" id="email_7"> <h4><?php
                                                                if ($response1["userdata"][0]["email"]["power_of_time"] == 0) {
                                                                    echo "Off";
                                                                } else {
                                                                    echo "On";
                                                                }
                                                                ?></h4> </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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