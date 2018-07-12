<?php

if(ISSET($_POST['registerprincipal'])){
    $principal_id = $_POST['principal_id'];
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
        $conn->query("INSERT INTO `tbluser` VALUES('', '$principal_id', '$username', '$password', 'Principal')") or die(mysqli_error());
        
        $conn->query("UPDATE `tblprincipal` SET `registration_status` = 'Registered' WHERE `principal_id` = '$principal_id'") or die(mysqli_error());
        $conn->close();
        echo "<script type='text/javascript'>alert('Successfully registered principal!');</script>";
        echo "<script>document.location='../principal.php'</script>";  
    }
}

?>