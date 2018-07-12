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
                                    <h3 class="panel-title">Principals List</h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#newprincipal">Add New Principal</button>
                                        </div>
                                    </div>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead> 
                                            <tr class="warning">
                                                <th>Principal ID</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Inclusive Years</th>
                                                <th>Teacher</th>
                                                <th><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
    require 'connection.php';
            $query = $conn->query("SELECT * FROM `tblprincipal` ORDER BY `principal_id` DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                                            ?>                                      
                                            <tr>
                                                <td><?php echo $fetch['principal_id']?></td>
                                                <td><?php echo $fetch['principal_name']?></td>
                                                <td><?php echo $fetch['principal_designation']?></td>
                                                <td><?php echo $fetch['principal_years']?></td>
                                                <td><?php echo $fetch['principal_teacher']?></td>
                                                <td><center>
                                                    <?php if ($fetch['registration_status'] == 'Registered')echo "<a class = 'btn btn-success btn-sm' href = '#'
																			data-container='body' data-toggle='popover' data-placement='left' data-content='Already Registered'><span class='fa fa-check'></span></a>";
                if ($fetch['registration_status'] == 'Unregister')echo "<a class = 'btn btn-danger btn-sm' href = 'registerprincipal.php?id=".$fetch['principal_id']."'><span class='fa fa-times'></span></a>";
                                                    ?>
                                                    <a href="#updateprincipal<?php echo $fetch['principal_id'];?>" data-target="#updateprincipal<?php echo $fetch['principal_id'];?>" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="#deleteprincipal<?php echo $fetch['principal_id'];?>" data-target="#deleteprincipal<?php echo $fetch['principal_id'];?>" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a></center>
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

        <!-- Add Principal -->
        <div class="modal fade" id="newprincipal" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content ">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Add New Principal</h4>
                    </div>
                    <form role="form" id="principalform" class="form-horizontal" action="crud/addprincipal.php" method="post" onsubmit="return confirm('Are you sure you want to add this new principal?');" >
                        <div class="modal-body">
                            <div class="panel-body">
                                <h5 class="push-up-1">Principal Full Name</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Full Name" type="text" class="form-control" name="fullname" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Designation</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Designation" type="text" class="form-control" name="designation" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Inclusive Years</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <select multiple class="form-control select" name="years[]" required data-live-search="true">
                                            <option value="2010-2011">2010-2011</option>
                                            <option value="2011-2012">2011-2012</option>
                                            <option value="2012-2013">2012-2013</option>
                                            <option value="2013-2014">2013-2014</option>
                                            <option value="2014-2015">2014-2015</option>
                                            <option value="2015-2016">2015-2016</option>
                                        </select>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Number of Teachers</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Number of Teachers" type="text" class="form-control" name="teacher" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="addprincipal"><span class="fa fa-check"></span>Save</button> 
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- End Add Principal -->

        <!-- Delete User-->
        <?php
        $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `tblprincipal`") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div class="modal fade" id="deleteprincipal<?php echo $fetch['principal_id'];?>" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="smallModalHead">Delete Principal</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="crud/deleteprincipal.php" method="post">
                        <div class="modal-body">
                            <input type="hidden" class="form-control" name="principal_id" value="<?php echo $fetch['principal_id'];?>" required>
                            Are you sure you want to delete this principal?
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="deleteprincipal"><span class="fa fa-ban"></span>Delete Principal</button>
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
        <!-- End Delete User -->


        <!-- Edit Principal -->
        <?php
        $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
        $query = $conn->query("SELECT * FROM `tblprincipal`") or die(mysqli_error());
        while($fetch = $query->fetch_array()){
        ?>
        <div id="updateprincipal<?php echo $fetch['principal_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Edit User</h4>
                    </div>
                    <form role="form" class="form-horizontal" action="crud/editprincipal.php" method="post" onsubmit="return confirm('Are you sure you want to edit this new principal?');" >
                        <div class="modal-body">
                            <div class="panel-body">
                                <h5 class="push-up-1">Principal Full Name</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="hidden" class="form-control" name="principal_id" value="<?php echo $fetch['principal_id'];?>" required>
                                        <input data-toggle="tooltip" data-placement="bottom" title="Full Name" type="text" class="form-control" name="fullname" value="<?php echo $fetch['principal_name']?>" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Designation</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Designation" type="text" class="form-control" name="designation" value="<?php echo $fetch['principal_designation']?>" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Inclusive Years</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <select multiple class="form-control select" name="years[]" required data-live-search="true" required>
                                            <option value="<?php echo $fetch['principal_years']?>"><?php echo $fetch['principal_years']?></option>
                                            <option value="2010-2011">2010-2011</option>
                                            <option value="2011-2012">2011-2012</option>
                                            <option value="2012-2013">2012-2013</option>
                                            <option value="2013-2014">2013-2014</option>
                                            <option value="2014-2015">2014-2015</option>
                                            <option value="2015-2016">2015-2016</option>
                                        </select>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Number of Teachers</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Number of Teachers" type="text" class="form-control" name="teacher" value="<?php echo $fetch['principal_teacher']?>" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="editprincipal"><span class="fa fa-check"></span>Save</button> 
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
        <!-- End Edit Principal-->

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
            $("#principalform").validate({
                ignore: [],
                rules: {
                    fullname: {
                        required: true
                    },
                    designation: {
                        required: true
                    },
                    years: {
                        required: true
                    },
                    teacher: {
                        required: true
                    }
                }
            });
        </script>
    </body>
</html>






