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


        <div class="page-content-wrap">                
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading">                                
                            <h3 class="panel-title">List of Students</h3>
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
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require 'connection.php';
                                    $query = $conn->query("SELECT * FROM `enrollstudent` where `teacher_id` = '$_SESSION[user_id]' && `subject_name` = '$_GET[subject_name]'") or die(mysqli_error());
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
                                        <td><center>
                                            <a href="#updatestudent<?php echo $fetch['enroll_id'];?>" data-target="#updatestudent<?php echo $fetch['enroll_id'];?>" data-toggle="modal" class="btn btn-primary btn-sm">Add Score</a>
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



<!-- Delete Teacher-->
<?php
$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `enrollstudent`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div class="modal fade" id="deletestudent<?php echo $fetch['enroll_id'];?>" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="smallModalHead">Delete Teacher</h4>
            </div>
            <form role="form" class="form-horizontal" action="crud/deletestudent.php" method="post">
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="teacher_id" value="<?php echo $fetch['teacher_id'];?>" required>
                    <input type="hidden" class="form-control" name="enroll_id" value="<?php echo $fetch['enroll_id'];?>" required>
                    <input type="hidden" class="form-control" name="subject_name" value="<?php echo $fetch['subject_name'];?>" required>
                    Are you sure you want to delete this student?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="deletestudent"><span class="fa fa-ban"></span>Delete Student</button>
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
$query = $conn->query("SELECT * FROM `enrollstudent`") or die(mysqli_error());
while($fetch = $query->fetch_array()){
?>
<div id="updatestudent<?php echo $fetch['enroll_id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="smallModalHead">Edit Student</h4>
            </div>
            <form role="form" class="form-horizontal" action="crud/editstudent.php" method="post" onsubmit="return confirm('Are you sure you want to edit this student?');">
                <div class="modal-body">
                    <div class="row">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>LRN</label>
                                <input type="hidden" class="form-control" name="enroll_id" value="<?php echo $fetch['enroll_id'];?>" required>
                                <input type="hidden" class="form-control" name="teacher_id" value="<?php echo $fetch['teacher_id'];?>" required>
                                <input type="hidden" class="form-control" name="subject_name" value="<?php echo $fetch['subject_name'];?>" required>
                                <input data-toggle="tooltip" data-placement="bottom" title="LRN" type="text" class="form-control" name="lrn" value="<?php echo $fetch['lrn']?>" required/>
                            </div>

                            <div class="form-group">
                                <label>Student Name</label>
                                <input data-toggle="tooltip" data-placement="bottom" title="Student Name" type="text" class="form-control" name="name" value="<?php echo $fetch['name']?>" required/>
                            </div>

                            <label>Gender</label>
                            <div class="form-group ">
                                <div class="col-md-12 col-xs-12">
                                    <select class="form-control select" name="gender" required>
                                        <option value="<?php echo $fetch['gender']?>"><?php echo $fetch['gender']?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="editstudent"><span class="fa fa-check"></span>Save</button>
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
    function openC() {
        myWindow = window.open("viewclassrecord.php?id=<?php echo $teacher_id?>&subject_name=<?php echo $subject_name?>", "", "width=1350, height=650");
    }
</script>
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






