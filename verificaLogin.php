<?php
     session_start();
if("user"!=$_SESSION["usuario"])
{
 header("Location:index.php");;
    exit();
}
?>
