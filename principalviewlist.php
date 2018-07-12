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
                    <li><a href="hometeacher.php">Home</a></li>
                    <li class="active">Class Record</li>
                </ul>

                <div class="page-content-wrap">                
                    <div class="row">
                        <div class="col-md-12">
                            <?php
    require 'connection.php';
            $query = $conn->query("SELECT * FROM `sub_assign` where `teacher_id` = '$_GET[id]' && `subject_name` = '$_GET[subject_name]' && `sy` = '$_GET[school_year]'") or die(mysqli_error());
            $fetch = $query->fetch_array();    
                            ?>
                            <div class="panel panel-primary">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">List of Students</h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <a href="principalviewclassrecord.php?id=<?php echo $fetch['teacher_id']?>&subject_name=<?php echo $fetch['subject_name']?>&school_year=<?php echo $fetch['sy']?>" class="btn btn-primary btn-md">Go to Class Record</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead> 
                                            <tr class="warning">
                                                <th>LRN</th>
                                                <th>Student Name</th>
                                                <th>Gender</th>
                                                <th>Grade</th>
                                                <th>Section</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
    require 'connection.php';
                                               $query = $conn->query("SELECT * FROM `enrollstudent` where `teacher_id` = '$_GET[id]' && `subject_name` = '$_GET[subject_name]' && `sy` = '$_GET[school_year]'") or die(mysqli_error());
                                               while($fetch = $query->fetch_array()){
                                                   $teacher_id = $fetch['teacher_id'];
                                                   $subject_name = $fetch['subject_name'];

                                            ?>                                      
                                            <tr>
                                                <td><?php echo $fetch['lrn']?></td>
                                                <td><?php echo $fetch['name']?></td>
                                                <td><?php echo $fetch['gender']?></td>
                                                <td><?php echo $fetch['grade']?></td>
                                                <td><?php echo $fetch['section']?></td>
                                                <td><?php echo $fetch['status']?></td>
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
        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>
        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>
        <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        <script type="text/javascript">
            $("#enrollform").validate({
                ignore: [],
                rules: {
                    lrn: {
                        required: true,
                    },
                    name: {
                        required: true,
                    },
                    gender: {
                        required: true,
                    }
                }
            });
        </script>
    </body>
</html>






