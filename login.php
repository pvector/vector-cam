<?php 
 session_start();
    require "db_handler.php";

    $db = new db_handler;
    $info;
    if($_POST["method"] == "sign_up"){
        $info = $db->sign_up($_POST["mail_id"] , $_POST["phone_number"] , $POST["password"]);
    }
    else{
        $info = $db->sign_in($_POST["mail_id"] , $POST["password"]);
    }
    if($info){
        echo "<h1>Success</h1>";
        $_SESSION["mail_id"] = $_POST["mail_id"];
        header("location:http://127.0.0.1:8080/index.php");
        die();
    }
    else{
        header("location:http://127.0.0.1:8080/static/login.html");
        die();
    }
?>