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
        <script src="js/jquery.canvasjs.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
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
                        <div class="col-md-3"> 
                            <select name="chart Type" id="chartType">
                                <option value="stackedColumn">Column Chart</option>
                                <option value="stackedBar">Bar Chart</option>
                                <option value="line">Line Chart</option>
                            </select>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- for json purposes only, everytime mag load ang file ga update ang json by ajax-->
                            <?php
    require 'connection.php';
            $fetch = $conn->query("SELECT *, count(*) as count FROM `enrollstudent` group by `sy`, `grade`") or die(mysqli_error());
            $data_points = array();
            while($result = $fetch->fetch_array()){
                $sy = $result['sy'];
                $grade = $result['grade'];
                $count = intval($result['count']);
                $point = array('grade' => $grade, 'sy' => $sy, 'count' => $count);
                array_push($data_points, $point);
            }
            $json_string = json_encode($data_points);
            $file = 'json/gradelevel.json';
            file_put_contents($file, $json_string);
                            ?> 
                            <div class="panel panel-default">
                                <div id="chartContainer" style="width: 100%; height: 400px"></div>                        
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>            
        </div>

    <?php require 'require/logoutnotify.php'?>
    <script src="loadchart/gradelevelreports.js"></script>
    <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
    <script type="text/javascript" src="js/plugins/icheck/icheck.min.js"></script>        
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>                                
    <script type="text/javascript" src="js/plugins/moment.min.js"></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
    <script type="text/javascript" src="js/settings.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>        
    <script type="text/javascript" src="js/actions.js"></script>
    </body>
</html>






