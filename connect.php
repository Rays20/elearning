<?php 
    try {
      $objetPdo = new PDO('mysql:host=localhost;dbname=elearningdz;charset=utf8mb4', 'root', '');
      $objetPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $objetPdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  
  } catch (PDOException $e) {
     echo "IMPOSSIBLE D'ACCÉDER À L'APPLICATION: " . $e->getMessage();

    }
	
	
	
?>