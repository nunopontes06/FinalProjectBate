<?php

        if(isset($_POST["submit"])){
          $servername = "localhost";
          $username = "root";
          $password = "#Qwerty3";
          $dbname = "lastone";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO outrasviaturas (marca, modelo, matricula, paismatricula, tipoveiculo, companhia, numeroapolice, nift, nomet, apelidot, moradat, cpostt, telefonet,
                nifc, nomec, apelidoc, moradac, cpostc, paistc, datanasc, telefonec, emailc, numerocartac, categoriac, danos, circunstancias,
                observacoes, paist)
                VALUES (
                '".$_POST["marca"]."',
                '".$_POST["modelo"]."',
                '".$_POST["matricula"]."',
                '".$_POST["paismatricula"]."',
                '".$_POST["tipoveiculo"]."',
                '".$_POST["companhia"]."',
                '".$_POST["numeroapolice"]."',
                '".$_POST["nift"]."',
                '".$_POST["nomet"]."',
                '".$_POST["apelidot"]."',
                '".$_POST["moradat"]."',
                '".$_POST["cpostt"]."',
                '".$_POST["telefonet"]."',
                '".$_POST["nifc"]."',
                '".$_POST["nomec"]."',
                '".$_POST["apelidoc,"]."',
                '".$_POST["moradac"]."',
                '".$_POST["cpostc"]."',
                '".$_POST["paistc"]."',
                '".$_POST["datanasc"]."',
                '".$_POST["datavc"]."',
                '".$_POST["telefonec"]."',
                '".$_POST["emailc"]."',
                '".$_POST["numerocartac"]."',
                '".$_POST["categoriac"]."',
                '".$_POST["danos"]."',
                '".$_POST["circunstancias"]."',
                '".$_POST["observacoes"]."',
                '".$_POST["paist"]."'
              )";

        if ($conn->query($sql) === TRUE) {

          header("Location: ../php/menuForm.php");
        }
        $conn->close();
        }
?>
