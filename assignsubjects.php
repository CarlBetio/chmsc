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
                    <li class="active">Teachers</li>
                </ul>

                <div class="page-content-wrap">                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Teacher's Subject Assignment</h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#assignsubjects">Assign Subjects</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead> 
                                            <tr class="warning">
                                                <th>Teacher ID</th>
                                                <th>Name</th>
                                                <th>TIN No</th>
                                                <th>Teacher Position</th>
                                                <th>Plantilla No</center></th>
                                        <th>Business Partner No</th>
                                        <th>Highest Educational Attainment</th>
                                        <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                <tbody>
                                    <?php
    require 'connection.php';
            $query = $conn->query("SELECT * FROM `tblteacher` ORDER BY `teacher_id` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                    ?>                                      
                                    <tr>
                                        <td><?php echo $fetch['teacher_id']?></td>
                                        <td><?php echo $fetch['teacher_name']. " " .$fetch['teacher_mid']. " " .$fetch['teacher_last']?></td>
                                        <td><?php echo $fetch['teacher_tin']?></td>
                                        <td><?php echo $fetch['teacher_position']?></td>
                                        <td><?php echo $fetch['teacher_plantilla']?></td>
                                        <td><?php echo $fetch['teacher_bp']?></td>
                                        <td><?php echo $fetch['teacher_attainment']?></td>
                                        <td><center>
                                            <a href="viewassignsubjects.php?id=<?php echo $fetch['teacher_id']?>&teacher_name=<?php echo $fetch['teacher_name']?>" class="btn btn-primary btn-sm">View Subjects</a>
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
<!-- Add Teacher -->
<div class="modal fade" id="assignsubjects" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Assign Subjects</h4>
            </div>

            <form role="form" class="form-horizontal" action="crud/assignsubjects.php" method="post" onsubmit="return confirm('Are you sure you want to assign this subject to this teacher?');" >
                <div class="modal-body">
                    <div class="panel-body">
                        <h5 class="push-up-1">Teacher</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <select class="form-control select" data-live-search="true" name="teacher_name">
                                    <option disabled selected>Select</option>
                                    <?php
                                    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `tblteacher`") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>

                                    <option value="<?php echo $fetch['teacher_id'].'|'.$fetch['teacher_name'] ?>"><?php echo $fetch['teacher_name']?></option>

                                    <?php
                                    }
                                    ?> 
                                </select>

                            </div>
                        </div>
                        <h5 class="push-up-1">Subject</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <select class="form-control select" data-live-search="true" name="subject">
                                    <option disabled selected>Select</option>
                                    <?php
                                    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `tblsubjects`") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                    <option value="<?php echo $fetch['subject_name'];?>"><?php echo $fetch['subject_name']?></option>
                                    <?php
                                    }
                                    ?> 
                                </select>
                            </div>
                        </div>
                        <h5 class="push-up-1">Grade</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <select class="form-control select" name="grade" required>
                                    <option disabled selected>Choose</option>
                                    <option value="1">Grade 1</option>
                                    <option value="2">Grade 2</option>
                                    <option value="3">Grade 3</option>
                                    <option value="4">Grade 4</option>
                                    <option value="5">Grade 5</option>
                                    <option value="6">Grade 6</option>
                                </select>
                            </div>
                        </div>
                        <h5 class="push-up-1">Section</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <input data-toggle="tooltip" data-placement="bottom" title="Section" type="text" class="form-control" name="section" required/>
                            </div>
                        </div>
                        <h5 class="push-up-1">School Year</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <select class="form-control select" name="sy" required data-live-search="true">
                                    <option disabled selected>Choose</option>
                                    <?php
                                    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `schoolyear`") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                    <option value="<?php echo $fetch['school_year'];?>"><?php echo $fetch['school_year']?></option>
                                    <?php
                                    }
                                    ?> 
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="assignsubjects"><span class="fa fa-check"></span>Save</button> 
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                </div>

            </form>
        </div>
    </div>
</div>
<!-- End Add Teacher -->



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






