<?php
if(ISSET($_POST['deleteprincipal'])){
    $principal_id = $_POST['principal_id'];
   
	
	$conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
	$query = $conn->query("SELECT * FROM `tblprincipal`") or die(mysqli_error());
	$fetch = $query->fetch_array();
	

	$conn->query("DELETE FROM `tblprincipal` WHERE `principal_id` = '$principal_id'") or die(mysqli_error());


	echo "<script type='text/javascript'>alert('Successfully deleted principal!');</script>";
	echo "<script>document.location='../principal.php'</script>";  
}

?>