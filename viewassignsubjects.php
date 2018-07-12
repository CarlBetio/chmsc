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
                    <li><a href="#">Subject Assignment</a></li>
                    <li class="active">Assign</li>
                </ul>

                <div class="page-content-wrap">                
                    <div class="row">
                        <div class="col-md-3">
                            <?php
    require 'connection.php';
            $query = $conn->query("SELECT * FROM `tblteacher` WHERE `teacher_id` = '$_GET[id]'") or die(mysqli_error());
            $fetch = $query->fetch_array();
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="img/alijis/logo.png" alt="Alijis Elem School"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name" style="font-size:20px;"><strong><?php echo $fetch['teacher_name']?></strong></div>
                                        <div class="profile-data-title" style="font-size:12px;"><strong><?php echo $fetch['teacher_bday']?></strong></div>
                                    </div>
                                </div>                                
                                <div class="panel-body">                                    
                                    <div class="contact-info">
                                        <p><small style="font-size:13px;">TIN Number</small><br/><?php echo $fetch['teacher_tin']?></p>
                                        <p><small style="font-size:13px;">Position</small><br/><?php echo $fetch['teacher_position']?></p>
                                        <p><small style="font-size:13px;">Highest Education Attainment</small><br/><?php echo $fetch['teacher_attainment']?></p>                            
                                    </div>
                                </div>                                
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-9">
                            <div class="panel panel-primary">
                                <div class="panel-heading"> 
                                    <?php
    require 'connection.php';
                                            $query = $conn->query("SELECT * FROM `tblteacher` WHERE `teacher_id` = '$_GET[id]' && `teacher_name` = '$_GET[teacher_name]'") or die(mysqli_error());
                                            $fetch = $query->fetch_array();
                                    ?>                               
                                    <h3 class="panel-title">Teacher's Subject Assignment</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead> 
                                            <tr class="warning">
                                                <th>Teacher ID</th>
                                                <th>Subject</th>
                                                <th>Grade</th>
                                                <th>Section</th>
                                                <th>School Year</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require 'connection.php';
                                            $query = $conn->query("SELECT * FROM `sub_assign` WHERE `teacher_id` = '$_GET[id]' ORDER BY `assign_id` DESC") or die(mysqli_error());
                                            while($fetch = $query->fetch_array()){
                                            ?>
                                            <tr>
                                                <td><center><?php echo $fetch['teacher_id']?></center></td>
                                                <td><center><?php echo $fetch['subject_name']?></center></td>
                                                <td><center><?php echo $fetch['grade']?></center></td>
                                                <td><center><?php echo $fetch['section']?></center></td>
                                                <td><center><?php echo $fetch['sy']?></center></td>
                                                <td><center>
                                                    <a href="principalviewlist.php?id=<?php echo $fetch['teacher_id']?>&subject_name=<?php echo $fetch['subject_name']?>&school_year=<?php echo $fetch['sy']?>" class="btn btn-primary btn-sm">Class Record</a></center>
                                                </td>
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
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script> 
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>
        <script type="text/javascript" src="js/settings.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>           

    </body>
</html>






