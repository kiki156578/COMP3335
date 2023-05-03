<html>
<?php
session_start();
$conn=mysqli_connect("localhost","root","willian1966","TSS");
  if ($_SERVER["REQUEST_METHOD"]=="POST" ){

    $show = $_POST["show"];
    $theater = $_POST["theater"];
    $seat = $_POST["seat"];
    
        if($show == 1) {
            $price = 150;
        }
        elseif ($show == 2) {
            $price = 120;
        }
        else {
            $price = 100;
        }
    
    if(false){

    }

    else{
        $query = "INSERT INTO TSS.Ticket VALUES( NULL ,'$price', '$theater', '$show', '$seat', '$')";
        mysqli_query($conn, $query);
        echo
        "<script> alert('Buying Successful'); </script>";
        }

      }    
      header( "refresh:1;url=login.php" );
            exit();
            
      ?>
</html>