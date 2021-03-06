<!DOCTYPE html>
<?php include './APIBaseURL.php'; ?>
<html dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
    <a href="index.php"></a>

    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/fevicon.png">
    <title>Matcheek - Admin panel</title>
    <link href="../../dist/css/style.min.css" rel="stylesheet">

    <script type="text/javascript">
        
        function showMessage() {
            var username = document.getElementById("admin").value;
            var password = document.getElementById("pass").value;
            
            if(username =="admin" && password == "admin")
            {
                if (location.hostname === "ec2-13-58-244-164.us-east-2.compute.amazonaws.com" || location.hostname === "13.58.244.164")
                {
                    window.location.href = "http://13.58.244.164/MatcheekAdmin/html/ltr/Home.php";
                }
                else
                {
                    window.location.href = "http://localhost/MatcheekAdmin/html/ltr/Home.php";
                }
                
            }
            else{
                alert("Username or Password is incorrect");
            }
            
        }
        
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
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db">
                            <img src="../../assets/images/logo/logoo.png" alt="logo" /></span>
                    </div>
                    <!-- Form -->
                    <!--action="<?php //echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>"-->
                    <form class="form-horizontal m-t-20" id="loginform" method = "post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="row p-b-30">
                            <div class="col-12">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" id="admin" name="admin" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" id="pass" name="pass" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20" style="margin-left: 30%">
                                        <button class="btn btn-success" style="width: 50%" type="button" name="login" onclick="showMessage()">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>

                                            $('[data-toggle="tooltip"]').tooltip();
                                            $(".preloader").fadeOut();
                                            // ============================================================== 
                                            // Login and Recover Password 
                                            // ============================================================== 
                                            $('#to-recover').on("click", function () {
                                                $("#loginform").slideUp();
                                                $("#recoverform").fadeIn();
                                            });
                                            $('#to-login').click(function () {

                                                $("#recoverform").hide();
                                                $("#loginform").fadeIn();
                                            });
    </script>

</body>

</html>
