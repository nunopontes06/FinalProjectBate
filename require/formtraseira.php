<?php

if(isset ($_POST['submit'])){

$trn_date = date("Y-m-d H:i:s");
$ocorrencia = $_POST['ocorrencia'];
$segurado = $_POST['segurado'];
$ferido = $_POST['ferido'];
$autoridade = $_POST['autoridade'];
$objetos = $_POST['objetos'];


$con = mysqli_connect('localhost','root','#Qwerty3','lastone');

$sql = mysqli_query($con, "INSERT INTO versodeclaracao (datar, ocorrencia, segurado, ferido, autoridade, objetos)
VALUES ('$trn_date','$ocorrencia','$segurado','$ferido','$autoridade','$objetos')");

if($sql){
	header("Location:../php/menuForm.php");
}
else{
	echo "Failed to insert";

	}

}

?>
