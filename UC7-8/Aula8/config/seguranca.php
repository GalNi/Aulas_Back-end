<?php

session_start();

if($_SESSION["ID_ACESSO"] = 1){

}else{
   header("Location: ../login.php");
};