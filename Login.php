<?php
session_start();
include "db_conn.php";
if(isset($_POST['uname']) && isset($_POST['password'])){
    function validation($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return data;
    }
}

$uname = validation($_POST['uname']);
$pass = validation($_POST['password']);

if(empty($uname)){
    header("Location: index.php?erro=User Name is required");
    exit();
}

?>