<?php
if(ISSET($_POST['editstudent'])){
    $enroll_id = $_POST['enroll_id'];
    $subject_name = $_POST['subject_name'];
    $lrn = $_POST['lrn'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $teacher_id = $_POST['teacher_id'];
    $status = $_POST['status'];
    $school_year = $_POST['school_year'];

    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
    $conn->query("UPDATE `enrollstudent` SET `lrn` = '$lrn', `name` = '$name', `gender` = '$gender', `status` = '$status' WHERE `enroll_id` = '$enroll_id'") or die(mysqli_error());

    echo "<script type='text/javascript'>alert('Successfully updated student!');</script>";
    echo "<script>document.location='../studentslist.php?id=$teacher_id&subject_name=$subject_name&school_year=$school_year'</script>";  
}

?>