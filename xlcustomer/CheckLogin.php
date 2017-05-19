<?php
    $e=$_GET['em'];
    $p=$_GET['pa'];
  
    $db = new PDO('mysql:host=localhost;dbname=Dbcustomer', 'root', '');
    $cmd = "select * from user where email='$e' and password='$p'";
    if($db->query($cmd)->rowCount()>0)
        echo 'correct';
    else {
        echo 'error';
}
?>