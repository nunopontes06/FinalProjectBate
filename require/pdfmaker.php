<?php



  $con = mysqli_connect('localhost','root','#Qwerty3','lastone');

  $sql = "SELECT * FROM viaturab,versodeclaracao,carro,fotocidente,outrasviaturas";
  $sql2 = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='lastone' AND `TABLE_NAME`='viaturab'";
  $sql3 = "SELECT emailc FROM viaturab";

  $result = mysqli_query($con,$sql);
  $header = mysqli_query($con,$sql2);

  $result2=mysqli_query($con,$sql3);
      while($email=mysqli_fetch_array($result2))
      {

       $emailc = $email['emailc'];

      }


    $token = '';
    for ($i = 0; $i<7; $i++)
    {
    $token .= mt_rand(0,5);
  }

  $sql4 ="INSERT INTO viaturab (token) VALUES ('$token')";
  mysqli_query($con,$sql4);

  require('../fpdf/fpdf.php');


  $pdf = new FPDF();
  $pdf->AddPage('L');
  $pdf->SetFont('Arial','B',10);

  foreach($header as $heading) {

  	foreach($heading as $column_heading)

  		$pdf->Cell(10,12,$column_heading,1);
  }

  foreach($result as $row) {

  	$pdf->Ln();

  	foreach($row as $column)

  		$pdf->Cell(10,12,$column,1);
  }



    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer;

    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = 'seguradorasPJ@gmail.com';          // SMTP username
    $mail->Password = '#Qwerty321'; // SMTP password
    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                          // TCP port to connect to

    $mail->setFrom('seguradorasPJ@gmail.com', 'BATE - APP');

    $mail->addAddress("$emailc");               // Add a recipient


    $mail->isHTML(true);  // Set email format to HTML

    $bodyContent = '<h1>Boletim Acidente Transito Online</h1>';
    $bodyContent .= '<p>Verifique a veracidade do pdf e diga o token a quem enviou o email</b></p>';
    $bodyContent .= $token;
    $mail->addStringAttachment($pdf->Output('S'), 'boletim.pdf');

    $mail->Subject = 'Email enviado do BATE';
    $mail->Body    = $bodyContent;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
        header("location:../php/pdfseguradora.php");
    }


?>
