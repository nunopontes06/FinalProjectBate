<?php

if(isset ($_POST['submit'])){

$trn_date = date("Y-m-d H:i:s");
$matricula = $_POST['matricula'];
$paismatricula = $_POST['paismatricula'];
$tipo = $_POST['tipo'];
$companhia = $_POST['companhia'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];

$con = mysqli_connect('localhost','root','#Qwerty3','lastone');

$sql = mysqli_query($con, "INSERT INTO viatura(trn_date, matricula, paismatricula, tipo, companhia, marca, modelo) VALUES ('$trn_date','$matricula','$paismatricula','$tipo','$companhia','$marca','$modelo')");

if($sql){
	header("Location: ../php/dashboard.php");
}
else{
	echo "Failed to insert";

	}

}

?>
