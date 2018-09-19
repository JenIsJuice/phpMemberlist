 <?php 
 include("connection.php");
  ?>
 <?php 

 $id = $_GET["id"];

$stm = $pdo->prepare("DELETE FROM 403411233_de_ciquo WHERE id = ?");
$stm->bindParam(1,$id);
 $stm->execute();
header("Location: http://163.13.127.236/guest/105students/403411233/boot/manage.php"); 
?>