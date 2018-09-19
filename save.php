 <?php 
 include("connection.php");
  ?>
 <?php 

 $name = $_POST["name"];
 $phone = $_POST["phone"];
 $email = $_POST["email"];
 $address = $_POST["address"];

$stm = $pdo->prepare("INSERT INTO 403411233_de_ciquo 
	(name,phone,email,address,creation_date) 
	VALUES (?,?,?,?,now() ) ");
$stm->bindParam(1,$name);
$stm->bindParam(2,$phone);
$stm->bindParam(3,$email);
$stm->bindParam(4,$address);

 $stm->execute();
header("Location:home.php"); 
?>

 <!-- echo '<meta http-equiv = REFRESH CONTENT = 2;url = http://163.13.127.236/guest/105students/403411233/boot/home.php>'; -->