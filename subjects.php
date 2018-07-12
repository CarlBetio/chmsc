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
                    <li class="active">Subjects</li>
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
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#newsubject">Add New Subject</button>
                                        </div>
                                    </div> 
                                </ul>

                                <div class="panel-body tab-content">
                                    <div class="tab-pane active" id="tab-first">
                                        <table class="table datatable">
                                            <thead> 
                                                <tr class="warning">
                                                    <th>Subject ID</th>
                                                    <th>Name</th>
                                                    <th>Schedule</th>
                                                    <th>Room</th>
                                                    <th><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
    require 'connection.php';
            $query = $conn->query("SELECT * FROM `tblsubjects` WHERE `subject_grade` = 'Grade 1' ORDER BY `subject_id` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><?php echo $fetch['subject_id']?></td>
                                                    <td><?php echo $fetch['subject_name']?></td>
                                                    <td><?php echo $fetch['subject_schedule']?></td>
                                                    <td><?php echo $fetch['subject_room']?></td>
                                                    <td><center>
                                                        <a href="#updatesubject<?php echo $fetch['subject_id'];?>" data-target="#updatesubject<?php echo $fetch['subject_id'];?>" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="#deletesubject<?php echo $fetch['subject_id'];?>" data-target="#deletesubject<?php echo $fetch['subject_id'];?>" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a></center>
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
                                                    <th>Subject ID</th>
                                                    <th>Name</th>
                                                    <th>Schedule</th>
                                                    <th>Room</th>
                                                    <th><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'connection.php';
                                                $query = $conn->query("SELECT * FROM `tblsubjects` WHERE `subject_grade` = 'Grade 2' ORDER BY `subject_id` DESC") or die(mysqli_error());
                                                while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><?php echo $fetch['subject_id']?></td>
                                                    <td><?php echo $fetch['subject_name']?></td>
                                                    <td><?php echo $fetch['subject_schedule']?></td>
                                                    <td><?php echo $fetch['subject_room']?></td>
                                                    <td><center>
                                                        <a href="#updatesubject<?php echo $fetch['subject_id'];?>" data-target="#updatesubject<?php echo $fetch['subject_id'];?>" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="#deletesubject<?php echo $fetch['subject_id'];?>" data-target="#deletesubject<?php echo $fetch['subject_id'];?>" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a></center>
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
                                                    <th>Subject ID</th>
                                                    <th>Name</th>
                                                    <th>Schedule</th>
                                                    <th>Room</th>
                                                    <th><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'connection.php';
                                                $query = $conn->query("SELECT * FROM `tblsubjects` WHERE `subject_grade` = 'Grade 3' ORDER BY `subject_id` DESC") or die(mysqli_error());
                                                while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><?php echo $fetch['subject_id']?></td>
                                                    <td><?php echo $fetch['subject_name']?></td>
                                                    <td><?php echo $fetch['subject_schedule']?></td>
                                                    <td><?php echo $fetch['subject_room']?></td>
                                                    <td><center>
                                                        <a href="#updatesubject<?php echo $fetch['subject_id'];?>" data-target="#updatesubject<?php echo $fetch['subject_id'];?>" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="#deletesubject<?php echo $fetch['subject_id'];?>" data-target="#deletesubject<?php echo $fetch['subject_id'];?>" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a></center>
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
                                                    <th>Subject ID</th>
                                                    <th>Name</th>
                                                    <th>Schedule</th>
                                                    <th>Room</th>
                                                    <th><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'connection.php';
                                                $query = $conn->query("SELECT * FROM `tblsubjects` WHERE `subject_grade` = 'Grade 4' ORDER BY `subject_id` DESC") or die(mysqli_error());
                                                while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><?php echo $fetch['subject_id']?></td>
                                                    <td><?php echo $fetch['subject_name']?></td>
                                                    <td><?php echo $fetch['subject_schedule']?></td>
                                                    <td><?php echo $fetch['subject_room']?></td>
                                                    <td><center>
                                                        <a href="#updatesubject<?php echo $fetch['subject_id'];?>" data-target="#updatesubject<?php echo $fetch['subject_id'];?>" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="#deletesubject<?php echo $fetch['subject_id'];?>" data-target="#deletesubject<?php echo $fetch['subject_id'];?>" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a></center>
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
                                                    <th>Subject ID</th>
                                                    <th>Name</th>
                                                    <th>Schedule</th>
                                                    <th>Room</th>
                                                    <th><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'connection.php';
                                                $query = $conn->query("SELECT * FROM `tblsubjects` WHERE `subject_grade` = 'Grade 5' ORDER BY `subject_id` DESC") or die(mysqli_error());
                                                while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><?php echo $fetch['subject_id']?></td>
                                                    <td><?php echo $fetch['subject_name']?></td>
                                                    <td><?php echo $fetch['subject_schedule']?></td>
                                                    <td><?php echo $fetch['subject_room']?></td>
                                                    <td><center>
                                                        <a href="#updatesubject<?php echo $fetch['subject_id'];?>" data-target="#updatesubject<?php echo $fetch['subject_id'];?>" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="#deletesubject<?php echo $fetch['subject_id'];?>" data-target="#deletesubject<?php echo $fetch['subject_id'];?>" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a></center>
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
                                                    <th>Subject ID</th>
                                                    <th>Name</th>
                                                    <th>Schedule</th>
                                                    <th>Room</th>
                                                    <th><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require 'connection.php';
                                                $query = $conn->query("SELECT * FROM `tblsubjects` WHERE `subject_grade` = 'Grade 6' ORDER BY `subject_id` DESC") or die(mysqli_error());
                                                while($fetch = $query->fetch_array()){
                                                ?>                                      
                                                <tr>
                                                    <td><?php echo $fetch['subject_id']?></td>
                                                    <td><?php echo $fetch['subject_name']?></td>
                                                    <td><?php echo $fetch['subject_schedule']?></td>
                                                    <td><?php echo $fetch['subject_room']?></td>
                                                    <td><center>
                                                        <a href="#updatesubject<?php echo $fetch['subject_id'];?>" data-target="#updatesubject<?php echo $fetch['subject_id'];?>" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="#deletesubject<?php echo $fetch['subject_id'];?>" data-target="#deletesubject<?php echo $fetch['subject_id'];?>" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a></center>
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

        <!-- Add Subject -->
        <div class="modal fade" id="newsubject" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Add New Subject</h4>
                    </div>

                    <form role="form" class="form-horizontal" action="crud/addsubject.php" method="post" onsubmit="return confirm('Are you sure you want to add this new subject?');" >
                        <div class="modal-body">
                            <div class="panel-body">
                                <h5 class="push-up-1">Subject Name</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Subject Name" type="text" class="form-control" name="subject" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Subject Room</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Subject Room" type="text" class="form-control" name="room" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Subject Schedule</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-control select" name="schedule" required data-live-search="true">
                                            <option disabled selected>Choose</option>
                                            <option value="7:30-8:30">7:30-8:30</option>
                                            <option value="8:30-9:30">8:30-9:30</option>
                                            <option value="10:00-11:00">10:00-11:00</option>
                                            <option value="11:00-12:00">11:00-12:00</option>
                                            <option value="1:00-2:00">1:00-2:00</option>
                                            <option value="2:00-3:00">2:00-3:00</option>
                                            <option value="3:00-4:00">3:00-4:00</option>
                                        </select>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Grade</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-control select" name="grade" required>
                                            <option disabled selected>Choose</option>
                                            <option value="Grade 1">Grade 1</option>
                                            <option value="Grade 2">Grade 2</option>
                                            <option value="Grade 3">Grade 3</option>
                                            <option value="Grade 4">Grade 4</option>
                                            <option value="Grade 5">Grade 5</option>
                                            <option value="Grade 6">Grade 6</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="addsubject"><span class="fa fa-check"></span>Save</button> 
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Subject -->

        <!-- Edit Subject -->
        <?php
        $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `tblsubjects`") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div id="updatesubject<?php echo $fetch['subject_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Edit Subject</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="crud/editsubject.php" method="post" onsubmit="return confirm('Are you sure you want to edit this new subject?');" >
                        <div class="modal-body">
                            <div class="panel-body">
                                <h5 class="push-up-1">Subject Name</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="hidden" class="form-control" name="subject_id" value="<?php echo $fetch['subject_id'];?>" required>
                                        <input data-toggle="tooltip" data-placement="bottom" title="Subject Name" type="text" class="form-control" name="subject" value="<?php echo $fetch['subject_name']?>" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Subject Room</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Subject Room" type="text" class="form-control" name="room" value="<?php echo $fetch['subject_room']?>" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Subject Schedule</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-control select" name="schedule" required data-live-search="true">
                                            <option value="<?php echo $fetch['subject_schedule']?>"><?php echo $fetch['subject_schedule']?></option>
                                            <option value="7:30-8:30">7:30-8:30</option>
                                            <option value="8:30=9:30">8:30-9:30</option>
                                            <option value="10:00-11:00">10:00-11:00</option>
                                            <option value="11:00-12:00">11:00-12:00</option>
                                            <option value="1:00-2:00">1:00-2:00</option>
                                            <option value="2:00-3:00">2:00-3:00</option>
                                            <option value="3:00-4:00">3:00-4:00</option>
                                        </select>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Grade</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-control select" name="grade" required>
                                            <option value="<?php echo $fetch['subject_grade']?>"><?php echo $fetch['subject_grade']?></option>
                                            <option value="Grade 1">Grade 1</option>
                                            <option value="Grade 2">Grade 2</option>
                                            <option value="Grade 3">Grade 3</option>
                                            <option value="Grade 4">Grade 4</option>
                                            <option value="Grade 5">Grade 5</option>
                                            <option value="Grade 6">Grade 6</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="editsubject"><span class="fa fa-check"></span>Save</button> 
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        }
        $conn->close();
        ?> 
        <!-- End Edit Subject -->

        <!-- Delete Subject-->
        <?php
        $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `tblsubjects`") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div class="modal fade" id="deletesubject<?php echo $fetch['subject_id'];?>" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead">Delete Subject</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="crud/deletesubject.php" method="post">
                        <div class="modal-body">
                            <input type="hidden" class="form-control" name="subject_id" value="<?php echo $fetch['subject_id'];?>" required>
                            Are you sure you want to delete this subject?
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="deletesubject"><span class="fa fa-ban"></span>Delete Subject</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                        </div>
                    </form>
                </div>
            </div>
        </div> 
        <?php
        }
        $conn->close();
        ?> 
        <!-- End Delete Subject -->


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






