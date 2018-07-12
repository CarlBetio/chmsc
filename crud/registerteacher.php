<?php

if(ISSET($_POST['registerteacher'])){
    $teacher_id = $_POST['teacher_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());

    $q1 = $conn->query ("SELECT * FROM `tbluser` WHERE BINARY `user_username` = '$username'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
    if($check > 0){
        echo "<script> alert ('Username name already exist!')</script>";
        echo "<script>document.location='../teachers.php'</script>";
    }
    else {
        $conn->query("INSERT INTO `tbluser` VALUES('', '$teacher_id', '$username', '$password', 'Teacher')") or die(mysqli_error());
        
        $conn->query("UPDATE `tblteacher` SET `registration_status` = 'Registered' WHERE `teacher_id` = '$teacher_id'") or die(mysqli_error());
        $conn->close();
        echo "<script type='text/javascript'>alert('Successfully registered teacher!');</script>";
        echo "<script>document.location='../teachers.php'</script>";  
    }
}

?>