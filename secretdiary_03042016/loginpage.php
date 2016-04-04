<?php
include ('connect.php');
session_start();
$session = $_SESSION["id"];
$query = "select * from diary where sessionid='$session'";
$resultlogin = mysqli_query($link, $query);
$row1 = mysqli_fetch_array($resultlogin);
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Secret Diary</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/customjs1.js" type="text/javascript"></script>
        
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
                <div class="navbar-nav nav pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">LogOut</a></li>
                      
                    </ul>

                </div>
            </div>
        </nav>
        <div class="container contentContainer" id="backimg">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>
                        Secret Diary
                    </h1>

                </div>
            </div>
            <div class="col-md-12 ">
                <textarea class="containertext form-control"><?php echo $row1["diarydata"]; ?></textarea>
            </div>
        </div>


    </body>
</html>