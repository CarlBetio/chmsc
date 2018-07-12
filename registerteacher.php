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
                    <li class="active">Register Teacher</li>
                </ul>

                <div class="page-content-wrap">                
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <?php
    require 'connection.php';
            $q = $conn->query("SELECT * FROM `tblteacher` WHERE `teacher_id` = '$_GET[id]'") or die(mysqli_error());
            $f1 = $q->fetch_array();
                                    ?>
                                    <h3 class="panel-title">Register Teacher</h3>
                                </div>
                                <form id="registrationform" action="crud/registerteacher.php" method="post" onsubmit="return confirm('Are you sure you want to register this account?');">
                                    <div class="panel-body">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="hidden" class="form-control" name="teacher_id" value="<?php echo $_GET['id'];?>" required>
                                                <input data-toggle="tooltip" data-placement="bottom" title="Username" type="text" class="form-control" name="username" required/>
                                            </div>

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input data-toggle="tooltip" data-placement="bottom" title="Password" type="password" class="form-control" name="password" id="password2" required/>
                                            </div>

                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input data-toggle="tooltip" data-placement="bottom" title="Re type password" type="password" class="form-control" name="re-password"  required/>
                                            </div>
                                        </div>
                                    </div>      
                                    <div class="panel-footer">
                                        <button type="submit" class="btn btn-primary" name="registerteacher"></span>Register</button>
                                    </div> 
                                </form>                           
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
    s
    <script type="text/javascript">
        $("#registrationform").validate({
            ignore: [],
            rules: {
                username: {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                },
                're-password': {
                    required: true,
                    minlength: 6,
                    maxlength: 20,
                    equalTo: "#password2"
                },
            }
        });
    </script>
    </body>
</html>






