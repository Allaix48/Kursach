<?php 
     /*  если пользователь не зарегистрирован, то ему будет дана возможность повторить ввод 
         имени и пароля. */ 
         if(!isset($_SESSION['logged'])){ 
         header("Location: index.php"); 
         exit; 
    } 
?>    