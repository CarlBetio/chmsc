<?php
if(ISSET($_POST['addteacher'])){
    $name = $_POST['name'];
    $middle = $_POST['middle'];
    $last = $_POST['last'];
    $birthdate = $_POST['birthdate'];
    $tin = $_POST['tin'];
    $position = $_POST['position'];
    $plantilla = $_POST['plantilla'];
    $bp = $_POST['bp'];
    $attainment = $_POST['attainment'];

    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());

    $q1 = $conn->query ("SELECT * FROM `tblteacher` WHERE BINARY `teacher_name` = '$name'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
    if($check > 0){
        echo "<script> alert ('This teacher already exist in records!')</script>";
        echo "<script>document.location='../teachers.php'</script>";
    }
    else {
        $conn->query("INSERT INTO `tblteacher` VALUES('', '$name', '$middle', '$last', '$birthdate', '$tin', '$position', '$plantilla', '$bp', '$attainment', 'Unregister')") or die(mysqli_error());
        $conn->close();
        echo "<script type='text/javascript'>alert('Successfully added new teacher!');</script>";
        echo "<script>document.location='../teachers.php'</script>";  
    }

}

?>