<?php 
include("submit.php");
?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Diary</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            .left{
                margin-left: 10px;
            }
            #backimg{
                background-image: url("images/nature.jpg");
                background-size: cover;
                width: 100%;
                padding-top: 100px;
            }
            #lastimg{
                background-color: honeydew;
                background-size: cover;
                width: 100%;

            }
            h1{
                font-size: 300%;
                color:black;
                font-weight: 500;
                text-align: center;
            }
            .top{
                margin-top: 30px;
            }
            .bottom{
                margin-bottom: 50px;
            }
            .center{
                text-align: center;
            }
            .img1{
                height: 120px;
                width:350px;
                border-radius: 10px;
                border: 1px solid honeydew;
            }
            .img2{
                height: 120px;
                width: 350px;
                border-radius: 10px;
                border: 1px solid honeydew;
            }
            .img3{
                height: 120px;
                width: 350px;
                border-radius: 10px;
                border: 1px solid honeydew;
            }
            .jumbotron{
                background-color: gainsboro;
                margin:50px;
                
            }
        </style>
        
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <nav class="navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand">MyApp</a>
                    <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" >
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#"></a></li>
                        <li class="active"><a href="#backimg">Home</a></li>
                        <li><a href="#details">AboutUs</a></li>
                        <li><a href="#lastimg">Download The App</a></li>

                    </ul>
                    <form class="navbar-form navbar-right" method="post" >
                        <div class="form-group">
                            <input type="email" placeholder="EmailAddress" name="email" class="form-control left">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password" class="form-control left">
                        </div>
                        <input type="submit" class="btn btn-success left" name="login" value="LogIn">
                    </form>
                </div>
            </div>
        </nav>
        <div class="container contentContainer" id="backimg">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>
                        My Awesome App
                    </h1>
                    <p class="lead">
                        To download this App please enter your E-mail address below.
                    </p>
                    <p>To know more about this App please refer the below link.
                        Please checkout the reviews of the App as well before downloading.
                        It's free of cost for limited period so hurry Up! Download before the offer expires.</p>
                    <?php
                    if(isset($error)){echo '<div class="alert alert-danger">'.$error.'</div>';
                    }
                    if(isset($message)){echo '<div class="alert alert-danger">'.$message.'</div>';
                    }
                    
                    ?>
                    <form class='top' method="post">
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type='email' class='form-control' placeholder="Email Address" name="emailsignup">
                        </div>
                        <div class="input-group top">
                            <span class="input-group-addon">*</span>
                            <input type='password' class='form-control' placeholder="Password" name="passwordsignup">
                        </div>

                        <input type='submit' class='btn btn-success top col-md-offset-5' name="signup" value='SignUp'>

                    </form>
                </div>
            </div>

        </div>
        <div class="container contentContainer top " id="details">
            <div class="page-header bottom">
                <h1><span class='glyphicon glyphicon-paperclip'> </span>About Us</h1>
                <p class='lead center'>Brief Information about App and Us.</p>
            </div>
            <div class="row ">
                <div class="col-md-4 top">
                    <h2><span class='glyphicon glyphicon-tag'></span> Reviews</h2> 
                    <p>This App is reviewed by 1L customers. It is available on all the platforms.It is an open source App.
                        It is available on all the platforms.It is an open source App.It is available on all the platforms.It is an open source App.
                        It is available on all the platforms.It is an open source App.</p>
                </div>
                <div class="col-md-4 top">
                    <h2><span class='glyphicon glyphicon-road'></span> App technologies</h2>
                    <p>We started our journey from 2014 now we have completed 2 years and we have this awesome App in our success list.
                        This is the beginning.We started our journey from 2014 now we have completed 2 years and we have this awesome App in our success list.
                        This is the beginning.</p>
                </div>
                <div class="col-md-4 top">
                    <h2><span class='glyphicon glyphicon-edit'></span>Esponal</h2>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  
                </div>

            </div>

        </div>
        <div class='container contentContainer top' id='lastimg'>
            <div class="page-header bottom">
                <h1>Download This App</h1>
            </div>  

            <div class="row top left ">
                <div class="col-md-4 top" >
                    <a href="https://www.microsoft.com/en-us/store/apps/windows" target="_blank"> <img src="images/window.png" class="img1" alt="Your browser doesn't support"></a>

                </div>
                <div class="col-md-4 top " >
                    <a href="https://play.google.com/store?hl=en" target="_blank"> <img src="images/play.png" class="img2" alt="Your browser doesn't support"></a>
                </div>
                <div class="col-md-4 top " >
                    <a href="https://itunes.apple.com/en/app/apple-store/id375380948?mt=8" target="_blank"><img src="images/app.png" class="img3" alt="Your browser doesn't support"></a>
                </div>

            </div>
            <div class="jumbotron top">
                <h1>Download The App Now Hurry!</h1>
                <p class="lead"></p>
            </div>
        </div>


        <script>
            $(".contentContainer").css("min-height", $(window).height());
        </script>
    </body>
</html>