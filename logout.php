
<?php
    session_start();
    if(session_destroy()){
        header("location: html-login-register.php");
    }

?>
?>