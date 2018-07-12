<?php

if(ISSET($_POST['assignsubjects'])){
    $datas = explode('|',$_POST['teacher_name']);
    $teacher_id = $datas[0];
    $teacher_name = $datas[1];
    $subject = $_POST['subject'];
    $grade = $_POST['grade'];
    $section = $_POST['section'];
    $sy = $_POST['sy'];

    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());

    $conn->query("INSERT INTO `sub_assign` VALUES('', '$teacher_id', '$teacher_name', '$subject', '$grade', '$section', '$sy')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully assigned subject!');</script>";
    echo "<script>document.location='../assignsubjects.php'</script>";  

}

?>