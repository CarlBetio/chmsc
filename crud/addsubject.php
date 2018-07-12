<?php

if(ISSET($_POST['addsubject'])){
    $subject = $_POST['subject'];
    $room = $_POST['room'];
    $schedule = $_POST['schedule'];
    $grade = $_POST['grade'];

    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());


    $q1 = $conn->query ("SELECT * FROM `tblsubjects` WHERE BINARY `subject_name` = '$subject'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
    $q2 = $conn->query ("SELECT * FROM `tblsubjects` WHERE BINARY `subject_room` = '$room' && `subject_schedule` = '$schedule'") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $check2 = $q2->num_rows;
    if($check > 0){
        echo "<script> alert ('This subject already exist in records!')</script>";
        echo "<script>document.location='../subjects.php'</script>";
    }
    if($check2 > 0){
        echo "<script> alert ('Room and Time is already occupied.!')</script>";
        echo "<script>document.location='../subjects.php'</script>";
    }
    else {
        $conn->query("INSERT INTO `tblsubjects` VALUES('', '$subject', '$room', '$schedule', '$grade')") or die(mysqli_error());
        $conn->close();
        echo "<script type='text/javascript'>alert('Successfully added new subjects!');</script>";
        echo "<script>document.location='../subjects.php'</script>";  
    }
}

?>