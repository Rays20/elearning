<?php

include_once "connect.php";
session_start();

if (!empty($_POST['mail']) && !empty($_POST['password'])) {
    $mail = $_POST['mail'];
    $pass = md5($_POST['password']);

    try { 
        $query = "SELECT * FROM signup WHERE mail = :mail";
        $stmt = $objetPdo->prepare($query);
        $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
        //$stmt->bindParam(':password', $password , PDO::PARAM_STR);
        $stmt->execute();
        //$count = $stmt->rowCount();
        $p = $stmt->fetch();
        $passw = $p["password"];

        if ($passw != $pass) {
            

    header('location: indexmain.php');
    exit();
} else {  
    
    $_SESSION['fname'] = $p["fname"];
    $_SESSION['lname'] = $p["lname"];

    $ray = "rayaneabid2003@gmail.com";
    $cr="ouazenechiraz2@gmail.com";
    $az="azizlaidi05@gmail.com";
    if ($mail == $ray || $mail == $cr || $mail == $az) {
        echo "hellllo";
        header('Location: /new/dmin_dashbaord_v17_html_css_js_bootstap-main/dmin_dashbaord_v17_html_css_js_bootstap-main/student_admin_dashboard/template/index-2.html');
exit;

    }else
    {
    header('location: student.php');
    exit();    
    }


    
}
  }   catch(PDOException $e) {
        // handle the exception
    }
}
?>