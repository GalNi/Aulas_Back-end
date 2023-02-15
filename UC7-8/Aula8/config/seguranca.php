<?php

session_start();

if($_SESSION["ID_ACESSO"] = 1){

   header("Location: ../admin/conta-admin.php");

}else{
   header("Location: ../login.php");
};