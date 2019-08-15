<?php
     session_start();
if("admin"!=$_SESSION["usuario"])
{
 header("Location:index.php");;
    exit();
}
?>
