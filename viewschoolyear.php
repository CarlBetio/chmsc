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
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-power-off"></span></a>                        
                    </li> 
                </ul>
                <ul class="breadcrumb">
                    <li><a href="#">Data Maintenance</a></li>
                    <li class="active">School Year</li>
                </ul>

                <div class="page-content-wrap">                
                    <div class="row">    
                        <div class="col-md-12">
                            <!-- START TABS -->                                
                            <div class="panel panel-default tabs">                            
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Grade 1</a></li>
                                    <li><a href="#tab-second" role="tab" data-toggle="tab">Grade 2</a></li>
                                    <li><a href="#tab-third" role="tab" data-toggle="tab">Grade 3</a></li>
                                    <li><a href="#tab-fourth" role="tab" data-toggle="tab">Grade 4</a></li>
                                    <li><a href="#tab-fifth" role="tab" data-toggle="tab">Grade 5</a></li>
                                    <li><a href="#tab-sixth" role="tab" data-toggle="tab">Grade 6</a></li>
                                </ul>

                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <table class="table datatable">
                                            <thead> 
                                                <tr class="warning">
                                                    <th>LRN</th>
                                                    <th>Student Name</th>
                                                    <th>Gender</th>
                                                    <th>Section</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    require 'connection.php';
            $query = $conn->query("SELECT * FROM `enrollstudent` WHERE `sy` = '$_GET[school_year]' && `grade` = '1'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><?php echo $fetch['lrn']?></td>
                                                    <td><?php echo $fetch['name']?></td>
                                                    <td><?php echo $fetch['gender']?></td>
                                                    <td><?php echo $fetch['section']?></td>
                                                </tr>
                                                <?php
            }
            $conn->close();
                                                ?>
                                            </tbody>
                                        </table>    
                                    </div>
                                    <div class="tab-pane" id="tab-second">
                                        <table class="table datatable">
                                            <thead> 
                                                <tr class="warning">
                                                    <th>LRN</th>
                                                    <th>Student Name</th>
                                                    <th>Gender</th>
                                                    <th>Section</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'connection.php';
                                                $query = $conn->query("SELECT * FROM `enrollstudent` WHERE `sy` = '$_GET[school_year]' && `grade` = '2'") or die(mysqli_error());
                                                while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><?php echo $fetch['lrn']?></td>
                                                    <td><?php echo $fetch['name']?></td>
                                                    <td><?php echo $fetch['gender']?></td>
                                                    <td><?php echo $fetch['section']?></td>
                                                </tr>
                                                <?php
                                                }
                                                $conn->close();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="tab-third">
                                        <table class="table datatable">
                                            <thead> 
                                                <tr class="warning">
                                                    <th>LRN</th>
                                                    <th>Student Name</th>
                                                    <th>Gender</th>
                                                    <th>Section</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'connection.php';
                                                $query = $conn->query("SELECT * FROM `enrollstudent` WHERE `sy` = '$_GET[school_year]' && `grade` = '3'") or die(mysqli_error());
                                                while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><?php echo $fetch['lrn']?></td>
                                                    <td><?php echo $fetch['name']?></td>
                                                    <td><?php echo $fetch['gender']?></td>
                                                    <td><?php echo $fetch['section']?></td>
                                                </tr>
                                                <?php
                                                }
                                                $conn->close();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="tab-fourth">
                                        <table class="table datatable">
                                            <thead> 
                                                <tr class="warning">
                                                    <th>LRN</th>
                                                    <th>Student Name</th>
                                                    <th>Gender</th>
                                                    <th>Section</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'connection.php';
                                                $query = $conn->query("SELECT * FROM `enrollstudent` WHERE `sy` = '$_GET[school_year]' && `grade` = '4'") or die(mysqli_error());
                                                while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><?php echo $fetch['lrn']?></td>
                                                    <td><?php echo $fetch['name']?></td>
                                                    <td><?php echo $fetch['gender']?></td>
                                                    <td><?php echo $fetch['section']?></td>
                                                </tr>
                                                <?php
                                                }
                                                $conn->close();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="tab-fifth">
                                        <table class="table datatable">
                                            <thead> 
                                                <tr class="warning">
                                                    <th>LRN</th>
                                                    <th>Student Name</th>
                                                    <th>Gender</th>
                                                    <th>Section</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'connection.php';
                                                $query = $conn->query("SELECT * FROM `enrollstudent` WHERE `sy` = '$_GET[school_year]' && `grade` = '5'") or die(mysqli_error());
                                                while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><?php echo $fetch['lrn']?></td>
                                                    <td><?php echo $fetch['name']?></td>
                                                    <td><?php echo $fetch['gender']?></td>
                                                    <td><?php echo $fetch['section']?></td>
                                                </tr>
                                                <?php
                                                }
                                                $conn->close();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="tab-sixth">
                                        <table class="table datatable">
                                            <thead> 
                                                <tr class="warning">
                                                    <th>LRN</th>
                                                    <th>Student Name</th>
                                                    <th>Gender</th>
                                                    <th>Section</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'connection.php';
                                                $query = $conn->query("SELECT * FROM `enrollstudent` WHERE `sy` = '$_GET[school_year]' && `grade` = '6'") or die(mysqli_error());
                                                while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><?php echo $fetch['lrn']?></td>
                                                    <td><?php echo $fetch['name']?></td>
                                                    <td><?php echo $fetch['gender']?></td>
                                                    <td><?php echo $fetch['section']?></td>
                                                </tr>
                                                <?php
                                                }
                                                $conn->close();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>                                                   
                            <!-- END TABS -->                        
                        </div>
                    </div>

                </div> 
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>



        <?php require 'require/logoutnotify.php'?>
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script> 
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>           

    </body>
</html>






