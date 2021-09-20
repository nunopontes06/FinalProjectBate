
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

        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $matricula = $_POST["matricula"];
        $paismatricula = $_POST["paismatricula"];
        $tipoveiculo = $_POST["tipoveiculo"];
        $companhia = $_POST["companhia"];
        $numeroapolice = $_POST["numeroapolice"];
        $nift = $_POST["nift"];
        $nomet = $_POST["nomet"];
        $apelidot = $_POST["apelidot"];
        $moradat = $_POST["moradat"];
        $cpostt = $_POST["cpostt"];
        $telefonet = $_POST["telefonet"];
        $nifc = $_POST["nifc"];
        $nomec = $_POST["nomec"];
        $apelidoc = $_POST["apelidoc"];
        $moradac = $_POST["moradac"];
        $paistc = $_POST["paistc"];
        $datanasc = $_POST["datanasc"];
        $telefonec = $_POST["telefonec"];
        $datavc = $_POST["datavc"];
        $emailc = $_POST["emailc"];
        $numerocartac = $_POST["numerocartac"];
        $categoriac = $_POST["categoriac"];
        $danos = $_POST["danos"];
        $circunstancias = $_POST["circunstancias"];
        $observacoes = $_POST["observacoes"];
        $paist = $_POST["paist"];

        $sql = mysqli_query($conn, "SELECT viaturabid FROM viaturab");
        $result = mysqli_num_rows($sql);

        if($result > 0){

          $sqlupdate = "UPDATE viaturab SET marca = '$marca' , modelo = '$modelo', matricula = '$matricula', paismatricula = '$paismatricula', tipoveiculo = '$tipoveiculo',
          companhia = '$companhia', numeroapolice = '$numeroapolice', nift = $nift, nomet = $nomet, apelidot = $apelidot, moradat = $moradat, cpostt = $cpostt, telefonet = $telefonet,
                  nifc = '$nifc', nomec = '$nomec', apelidoc = '$apelidoc', moradac = '$moradac', cpostc = '$cpostt', paistc = '$paistc', datanasc ='$datanasc',
                   telefonec = '$telefonec', datavc  = '$datavc', emailc = '$emailc',
                  numerocartac = '$numerocartac', categoriac = '$categoriac', danos = '$danos', circunstancias = '$circunstancias',
                  observacoes = '$observacoes', paist = '$paist'";
          echo $sqlupdate;
        mysqli_query($conn,$sqlupdate);


      }else{

        $sqlinsert = "INSERT INTO viaturab (marca, modelo, matricula, paismatricula, tipoveiculo, companhia, numeroapolice, nift, nomet, apelidot, moradat, cpostt, telefonet,
                nifc, nomec, apelidoc, moradac, cpostc, paistc, datanasc, telefonec, datavc, emailc, numerocartac, categoriac, danos, circunstancias,
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
                '".$_POST["apelidoc"]."',
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
                '".$_POST["paist"]."')";
          echo $sqlinsert;
        mysqli_query($conn,$sqlinsert);


        if ($conn->query($sqlinsert || $sqlupdate) === TRUE) {


        $conn->close();
        }

      }
        header("location: ../php/menuForm.php");
    }


?>
