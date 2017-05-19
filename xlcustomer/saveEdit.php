<?php
    $id=$_POST['id'];
    $fname=$_POST['firstName'];
    $lname=$_POST['lastName'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $add=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state']; 
    $zip=$_POST['zip'];
    $db = new PDO('mysql:host=localhost;dbname=Dbcustomer', 'root', '');
    $cmd = "update customers set fname='$fname',lname='$lname',gender='$gender',email='$email',"
            . "address='$add',city='$city',state='$state',zip='$zip' where id='$id'";
    if($db->exec($cmd))
        header ('location:../index.php');

?>