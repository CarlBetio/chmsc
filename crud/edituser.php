<?php
if(ISSET($_POST['edituser'])){
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];    

    $conn = new mysqli("localhost", "root", "", "alijisclassrecord") or die(mysqli_error());
    $query = $conn->query("SELECT * FROM `tbluser`") or die(mysqli_error());
    $fetch = $query->fetch_array();


    $conn->query("UPDATE `tbluser` SET `user_username` = '$username', `user_password` = '$password' WHERE `user_id` = '$user_id'") or die(mysqli_error());


    echo "<script type='text/javascript'>alert('Successfully updated user!');</script>";
    echo "<script>document.location='../users.php'</script>";  
}

?>