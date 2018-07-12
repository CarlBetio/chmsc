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
                                    <h3 class="panel-title">Teachers List</h3>
                                    <div class="btn-group pull-right">
                                        <div class="pull-left">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#newteacher">Add New Teacher</button>
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
                                            <?php if ($fetch['registration_status'] == 'Registered')echo "<a class = 'btn btn-success btn-sm' href = '#'
																			data-container='body' data-toggle='popover' data-placement='left' data-content='Already Registered'><span class='fa fa-check'></span></a>";
                                            if ($fetch['registration_status'] == 'Unregister')echo "<a class = 'btn btn-danger btn-sm' href = 'registerteacher.php?id=".$fetch['teacher_id']."'><span class='fa fa-times'></span></a>";
                                            ?>

                                            <a href="#updateteacher<?php echo $fetch['teacher_id'];?>" data-target="#updateteacher<?php echo $fetch['teacher_id'];?>" data-toggle="modal" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="#deleteteacher<?php echo $fetch['teacher_id'];?>" data-target="#deleteteacher<?php echo $fetch['teacher_id'];?>" data-toggle="modal" class="btn btn-danger btn-sm">Delete</a></center>
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
<div class="modal fade" id="newteacher" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="largeModalHead">Add New Teacher</h4>
            </div>

            <form role="form" id="teacherform" class="form-horizontal" action="crud/addteacher.php" method="post" onsubmit="return confirm('Are you sure you want to add this new teacher user?');" >
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <h5 class="push-up-1">Teacher's First Name</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="bottom" title="First Name" type="text" class="form-control" name="name" required/>
                                </div>
                            </div>
                            <h5 class="push-up-1">Teacher's Middle Name</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="bottom" title="Middle Name" type="text" class="form-control" name="middle" required/>
                                </div>
                            </div>
                            <h5 class="push-up-1">Teacher's Last Name</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="bottom" title="Last Name" type="text" class="form-control" name="last" required/>
                                </div>
                            </div>
                            <h5 class="push-up-1">Birthdate</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input type="text" class="form-control datepicker"  name="birthdate" id="birthdate" required/>
                                </div>
                            </div>
                            <h5 class="push-up-1">TIN Number</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="bottom" title="TIN Number" type="text" class="mask_tin form-control" name="tin" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="push-up-1">Position</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control select" name="position" required>
                                        <option>Choose</option>
                                        <option value="Guidance Counselor">Guidance Counselor</option>
                                        <option value="Assistant Principal">Assistant Principal</option>
                                        <option value="Adviser">Adviser</option>
                                    </select>
                                </div>
                            </div>
                            <h5 class="push-up-1">Plantilla Number</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="bottom" title="Plantilla" type="text" class="form-control" name="plantilla" required/>
                                </div>
                            </div>
                            <h5 class="push-up-1">Business Partner Number</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="bottom" title="Business Partner Number" type="text" class="form-control" name="bp" required/>
                                </div>
                            </div>
                            <h5 class="push-up-1">Highest Educational Attainment</h5>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <input data-toggle="tooltip" data-placement="bottom" title="Business Partner Number" type="text" class="form-control" name="attainment" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="addteacher"><span class="fa fa-check"></span>Save</button> 
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>                        
                </div>

            </form>
        </div>
    </div>
</div>
<!-- End Add Teacher -->

<!-- Register Teacher -->
<?php
$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `tblteacher`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>

<div class="modal fade" id="registerteacher<?php echo $fetch['teacher_id'];?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Add New User</h4>
            </div>

            <form role="form" id="userform" class="form-horizontal" action="crud/registerteacher.php" method="post" onsubmit="return confirm('Are you sure you want to add this new user?');" >
                <div class="modal-body">
                    <div class="panel-body">
                        <h5 class="push-up-1">Username</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <input type="hidden" class="form-control" name="teacher_id" value="<?php echo $fetch['teacher_id'];?>" required>
                                <input data-toggle="tooltip" data-placement="bottom" title="Username" type="text" class="form-control" name="username" required/>
                            </div>
                        </div>
                        <h5 class="push-up-1">Password</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <input data-toggle="tooltip" data-placement="bottom" title="Password" type="password" class="form-control" name="password" id="password2" required/>
                            </div>
                        </div>
                        <h5 class="push-up-1">Confirm Password</h5>
                        <div class="form-group ">
                            <div class="col-md-12 col-xs-12">
                                <input data-toggle="tooltip" data-placement="bottom" title="Re type password" type="password" class="form-control" name="re-password"  required/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="registerteacher"><span class="fa fa-check"></span>Save</button> 
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
<!-- End Register Teacher -->

<!-- Delete Teacher-->
<?php
$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `tblteacher`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div class="modal fade" id="deleteteacher<?php echo $fetch['teacher_id'];?>" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="smallModalHead">Delete Teacher</h4>
            </div>
            <form role="form" class="form-horizontal" action="crud/deleteteacher.php" method="post">
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="teacher_id" value="<?php echo $fetch['teacher_id'];?>" required>
                    Are you sure you want to delete this teacher?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="deleteteacher"><span class="fa fa-ban"></span>Delete Teacher</button>
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
<!-- End Delete Teacher -->


<!-- Edit Teacher -->
<?php
$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `tblteacher`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="updateteacher<?php echo $fetch['teacher_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="largeModalHead">Edit User</h4>
            </div>
            <form role="form" class="form-horizontal" action="crud/editteacher.php" method="post" onsubmit="return confirm('Are you sure you want to edit this teacher?');">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <h5 class="push-up-1">Teacher's First Name</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="hidden" class="form-control" name="teacher_id" value="<?php echo $fetch['teacher_id'];?>" required>
                                        <input data-toggle="tooltip" data-placement="bottom" title="First Name" type="text" class="form-control" name="name" value="<?php echo $fetch['teacher_name']?>"required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Teacher's Middle Name</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Middle Name" type="text" class="form-control" name="middle" value="<?php echo $fetch['teacher_mid']?>" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Teacher's Last Name</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Last Name" type="text" class="form-control" name="last" value="<?php echo $fetch['teacher_last']?>" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Birthdate</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="text" class="form-control datepicker"  name="birthdate" id="date_taken2" value="<?php echo $fetch['teacher_bday']?>" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">TIN Number</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="TIN Number" type="text" class="form-control" name="tin" value="<?php echo $fetch['teacher_tin']?>" required/>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <h5 class="push-up-1">Position</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <select class="form-control select" name="position" required>
                                            <option value="<?php echo $fetch['teacher_position']?>"><?php echo $fetch['teacher_position']?></option>
                                            <option value="Guidance Counselor">Guidance Counselor</option>
                                            <option value="Assistant Principal">Assistant Principal</option>
                                            <option value="Adviser">Adviser</option>
                                        </select>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Plantilla Number</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Plantilla" type="text" class="form-control" name="plantilla" value="<?php echo $fetch['teacher_plantilla']?>" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Business Partner Number</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Business Partner Number" type="text" class="form-control" name="bp" value="<?php echo $fetch['teacher_bp']?>" required/>
                                    </div>
                                </div>
                                <h5 class="push-up-1">Highest Educational Attainment</h5>
                                <div class="form-group ">
                                    <div class="col-md-12 col-xs-12">
                                        <input data-toggle="tooltip" data-placement="bottom" title="Business Partner Number" type="text" class="form-control" name="attainment" value="<?php echo $fetch['teacher_attainment']?>" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="editteacher"><span class="fa fa-check"></span>Save</button>
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
<!-- End Edit Teacher-->

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
<script>
    var date=new Date();
    $('#birthdate').datepicker({
        format: 'MM dd, yyyy',
        language: 'en',
        startDate : new Date('1900-01-01'),
        endDate : date
    });
</script>
<script type="text/javascript">
    $("#teacherform").validate({
        ignore: [],
        rules: {
            age: {
                min: 0,
                max: 5
            },
            name: {
                required: true,
            },
            middle: {
                required: true,
            },
            last: {
                required: true,
            },
            birthdate: {
                required: true,
            },
            tin: {
                required: true,
            },
            position: {
                required: true,
            },
            plantilla: {
                required: true,
            },
            bp: {
                required: true,
            },
            attainment: {
                required: true,
            }
        }
    });
</script>
</body>
</html>






