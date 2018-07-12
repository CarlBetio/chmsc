<?php
if(ISSET($_POST['editsubject'])){
    $subject_id = $_POST['subject_id'];
	$subject = $_POST['subject'];
    $room = $_POST['room'];
    $schedule= $_POST['schedule'];
    $grade = $_POST['grade'];
	
	$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
	$conn->query("UPDATE `tblsubjects` SET `subject_name` = '$subject', `subject_room` = '$room', `subject_schedule` = '$schedule',
    `subject_grade` = '$grade' WHERE `subject_id` = '$subject_id'") or die(mysqli_error());

	echo "<script type='text/javascript'>alert('Successfully updated subject!');</script>";
	echo "<script>document.location='../subjects.php'</script>";  
}

?>