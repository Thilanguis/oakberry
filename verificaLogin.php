<?php
     session_start();


    if("user"!=$_SESSION["usuario"] && "1"!=$_SESSION["statusEmail"]) 
    {
       
        
     header("Location:index.php");;
        exit();
            
        
    }
?>
