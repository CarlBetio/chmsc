<?php
require 'require/logincheck.php';
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <title>Alijis Elementary School</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="img/alijis/logo.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css"/>
    </head>
    <body>
        <?php 
        $query = $conn->query("SELECT * FROM `tbluser` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
        <div class="page-container">
            <?php require 'require/sidebar.php'?>
            <div class="page-content">
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-bars"></span></a>
                    </li>
                    <li class="xn-icon-button pull-right">
                        <a href="pages-login.html" class="mb-control" data-box="#mb-signout"><span class="glyphicon glyphicon-off"></span></a>                        
                    </li> 
                </ul>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">

                                    <div class="profile-data">
                                        <div class="profile-data-name" style="font-size:30px;">Alijis Elementary School</div>
                                        <div class="profile-data-title" style="font-size:20px;">District of Valladolid</div>
                                    </div>
                                </div>                                
                                <div class="panel-body">   
                                    <?php 
    $query = $conn->query("SELECT COUNT(*) as total FROM `tblteacher`") or die(mysqli_error());
            $find = $query->fetch_array();
                                    ?>                                 
                                    <div class="contact-info" style="font-size:18px;">
                                        <p><small>School ID</small><br/>117422</p><hr>
                                        <p><small>Location</small><br/>Brgy. Alijis, Valladolid, Negros Occidental, Philippines</p><hr>
                                        <p><small>Brgy. Catchment Areas</small><br/>Brgy. Alijis, Brgy. Bayabas and Brgy. Doldol</p><hr>
                                        <p><small>No. of Teacherss</small><br/><?php echo $find['total']?> Regular Teachers | 3 Volunteers</p><hr>
                                        <p><small>Lot Owned by</small><br/>Municipality of Valladolid</p>                                     
                                    </div>
                                </div>                                
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                    </div>
                </div>                    
            </div>
        </div>            
        </div>

    <?php require 'require/logoutnotify.php'?>
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
    <script type="text/javascript" src="js/plugins/icheck/icheck.min.js"></script>        
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>                                
    <script type="text/javascript" src="js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>        
    <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






