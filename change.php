<?php
include ("connection.php");

 $name = $_POST["name"];
 $phone = $_POST["phone"];
 $email = $_POST["email"];
 $address = $_POST["address"];

$sql_change = $pdo->prepare("UPDATE 403411233_de_ciquo
	SET name=?,phone=?,email=?,address=?
	WHERE id=".$_GET['id']);

$sql_change->bindParam(1,$name);
$sql_change->bindParam(2,$phone);
$sql_change->bindParam(3,$email);
$sql_change->bindParam(4,$address);
$sql_change->execute();

header("Location:manage.php");
?>