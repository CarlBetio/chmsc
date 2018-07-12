<?php

if(ISSET($_POST['addstudent'])){
    $teacher_id = $_POST['teacher_id'];
    $subject_name = $_POST['subject_name'];
    $grade = $_POST['grade'];
    $section = $_POST['section'];
    $lrn = $_POST['lrn'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $sy = $_POST['sy'];
    $status = $_POST['status'];

    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());

    $q1 = $conn->query ("SELECT * FROM `enrollstudent` WHERE BINARY `lrn` = '$lrn'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
    if($check > 0){
        echo "<script> alert ('Student LRN already exist in records!')</script>";
        echo "<script>document.location='../studentslist.php?id=$teacher_id&subject_name=$subject_name&school_year=$sy'</script>";
    }
    else {
        $conn->query("INSERT INTO `enrollstudent` VALUES('', '$lrn', '$name', '$gender', '$subject_name', '$grade', '$section', '$sy', '$teacher_id', '$status')") or die(mysqli_error());
        $conn->close();

        echo "<script type='text/javascript'>alert('Successfully added new student!');</script>";
        echo "<script>document.location='../studentslist.php?id=$teacher_id&subject_name=$subject_name&school_year=$sy'</script>";  
    }



}

?>