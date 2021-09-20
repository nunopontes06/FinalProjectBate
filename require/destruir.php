
 <?php


        $con = mysqli_connect('localhost','root','#Qwerty3','lastone');
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "DELETE FROM viaturab,versodeclaracao,fotocidente,outrasviaturas";
        mysqli_query($con,$sql);

        header("location:../php/dashboard.php");



?>
