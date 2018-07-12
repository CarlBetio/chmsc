<?php
if(ISSET($_POST['editteacher'])){
    $teacher_id = $_POST['teacher_id'];
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
	$conn->query("UPDATE `tblteacher` SET `teacher_name` = '$name', `teacher_mid` = '$middle', `teacher_last` = '$last',
    `teacher_bday` = '$birthdate', `teacher_tin` = '$tin', `teacher_position` = '$position', `teacher_plantilla` = '$plantilla', `teacher_bp` = '$bp',
    `teacher_attainment` = '$attainment' WHERE `teacher_id` = '$teacher_id'") or die(mysqli_error());

	echo "<script type='text/javascript'>alert('Successfully updated teacher!');</script>";
	echo "<script>document.location='../teachers.php'</script>";  
}

?>