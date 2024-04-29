<?php
	//check login
	// include("code.php");
    require_once "code.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <link rel="icon" href="static/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="static/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="static/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="static/assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="static/assets/css/style.css">

</head>
<style>
        /* CSS for setting background image */
        .login {
            background-image: url('HRMS MAIN.png'); /* Replace 'path_to_your_background_image.jpg' with the actual path to your background image */
            background-size: cover;
            background-position: center;
        }
    </style>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>
    <!-- Pre-loader end -->

    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
                        <form class="md-float-material" method="POST" action="code.php">
                           

                            <!-- <div class="text-center">
                                <img src="{% static 'assets/images/loginlogo.png' %}" alt="loginlogo.png" height="200px" width="200px">  
                            </div> -->
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <hr/>
                                
                                <div class="input-group">
                                    <input type="text" class="form-control" name="username"  placeholder="Enter Your User Name">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label>
                                                
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right f-right">
                                            <a href="auth-reset-password.html" class="text-right f-w-600 text-inverse"> Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <br>
                                
                                        <button type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" style="background-color:purple">Sign in</button>        
                                        <a href="index.php"    class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" style="background-color:purple">Back</a>                                                    
                                <hr/>
                                <tr><td>
                                        <p class="text-inverse text-left"><b></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <img src="static/assets/images/htge.jpg" alt="HRMS MAIN" height="80px"  width="80px"><br><p  style="color: gray " ><b>htge.org</b></p> </p>
     
                                    </td>  
                                 </tr>   
                            </div>
                            
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <script type="text/javascript" src="static/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="static/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="static/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="static/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="static/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="static/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="static/bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="static/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="static/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="static/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="static/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <script type="text/javascript" src="static/assets/js/common-pages.js"></script>
   
</body>

</html>
