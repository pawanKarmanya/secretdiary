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
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        
        <script>
            $(".contentContainer").css("min-height", $(window).height());
        </script>
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
            h1{
                font-size: 300%;
                color:black;
                font-weight: 500;
                text-align: center;
            }
            .top{
                margin-top: 30px;
            }
            
            .center{
                text-align: center;
            }
            
        </style>
        
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <nav class="navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand">Secret Diary</a>
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
                        <li class="active"><a href="#">Home</a></li>

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
                        My Secret Diary
                    </h1>
                    <p class="lead">
                        To Write your secrets in this diary please sign up below.
                    </p>
                    <p>To know more about this App please refer the below link.
                        Please checkout the reviews of the App as well before downloading.
                        It's free of cost for limited period so hurry Up! Download before the offer expires.</p>
                    <?php
                    if(isset($error)){echo '<div class="alert alert-danger">'.$error.'</div>';
                    }
                    if(isset($message)){echo '<div class="alert alert-success">'.$message.'</div>';
                    }
                    
                    ?>
                    <form class='top ' method="post">
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type='email' class='form-control' placeholder="Email Address" value="" name="emailsignup" required>
                        </div>
                        <div class="input-group top">
                            <span class="input-group-addon">*</span>
                            <input type='password' class='form-control' placeholder="Password" value="" name="passwordsignup" required>
                        </div>

                        <input type='submit' class='btn btn-success top col-md-offset-5 bottom' name="signup" value='SignUp'>

                    </form>
                </div>
            </div>

        </div>


    </body>
</html>