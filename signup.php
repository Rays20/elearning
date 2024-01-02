<?php

require 'connect.php';
if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['mail'])  && !empty($_POST['password'])) {
    $fname = $_POST['fname'];
    $lname= $_POST['lname'];
    $dob=$_POST['dob'];
    $mail = $_POST['mail'];
    $password = md5($_POST['password']);

    try {
        $query = "INSERT INTO signup (fname, lname,dob, mail, password) VALUES (:fname, :lname, :dob, :mail, :password)";
        $stmt = $objetPdo->prepare($query);
        $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
        $stmt->bindParam(':lname', $lname, PDO::PARAM_STR);
        $stmt->bindParam(':dob', $dob, PDO::PARAM_STR);
        $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);

        $stmt->execute();

        
        header('location:indexmain.php');
        exit();
    } catch (PDOException $e) {
        echo "Error : ".$e->getMessage();
    }
}
?>
