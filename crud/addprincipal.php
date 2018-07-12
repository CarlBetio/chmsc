<?php

if(ISSET($_POST['addprincipal'])){
    $fullname = $_POST['fullname'];
    $designation = $_POST['designation'];
    $years = $_POST['years'];
    $teacher = $_POST['teacher'];

    $new = "";
    foreach($years as $value) {
        $new .= $value . ",";  
    }
    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());

    $q1 = $conn->query ("SELECT * FROM `tblprincipal` WHERE BINARY `principal_name` = '$fullname'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
    if($check > 0){
        echo "<script> alert ('Principal name already exist!')</script>";
        echo "<script>document.location='../principal.php'</script>";
    }
    else {
        $conn->query("INSERT INTO `tblprincipal` VALUES('', '$fullname', '$designation', '$new', '$teacher', 'Unregister')") or die(mysqli_error());
        $conn->close();
        echo "<script type='text/javascript'>alert('Successfully added new principal!');</script>";
        echo "<script>document.location='../principal.php'</script>";  
    }
}

?>