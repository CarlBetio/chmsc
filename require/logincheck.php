<?php
session_start();
if(!ISSET($_SESSION['user_id']))
{
    echo "<script> alert ('Login required!')</script>";
    echo "<script>document.location='index.php'</script>";

}
?>
