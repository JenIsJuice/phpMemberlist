<?php 

include ("connection.php");
// get id from manage fun2;
 $id = $_GET["id"];
 $getdaze = ("SELECT * FROM `403411233_de_ciquo` WHERE `id` = ".$id);
 $row = $pdo->query($getdaze);
 $display = $row->fetch(PDO::FETCH_ASSOC);

echo "{ ";
echo "\"name\":\"".$display["name"]."\"";
echo " }";

?>