<?php 
session_start();
if(!isset($_SESSION['user'])){
	header ("location:login.html");
	exit();

}
$$connection =new mysqli("localhost","root","","mytest");
if($connection->connect_error){

die("connection failed: ".$connection->connect_error);
}
$user_id=$_SESSION['userid'];
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $sql="UPDATE profile SET firstname='firstname',lastname='lastname',iscompleted=1 where userid='$userid'";
        if($connection->query($sql)==TRUE){

        echo "profile update successfuly";
        header("location:#");
    }else {
    	echo"error updating profile:". $$connection->error;
    }
    }
    $connection->close();
?>