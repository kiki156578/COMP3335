<html>
<?php
session_start();
$conn=mysqli_connect("localhost","root","willian1966","TSS");
  if ($_SERVER["REQUEST_METHOD"]=="POST" ){

        $uname = $_POST["uname"];
        $psw = $_POST["psw"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $ccn = $_POST["ccn"];
        $duplicate = mysqli_query($conn, "SELECT * FROM TSS.Customer WHERE Username = '$uname'");

        if(mysqli_num_rows($duplicate) > 0){
          echo
            "<script> alert('Username Has Been Used'); </script>";
        }

        else{
          $query = "INSERT INTO TSS.Customer VALUES( NULL ,'$uname', '$psw', '$firstname', '$lastname', '$email', '$ccn')";
          mysqli_query($conn, $query);
          echo
            "<script> alert('Registration Successful'); </script>";
        }

      }    
      header( "refresh:1;url=login.php" );
            exit();
            
      ?>
</html>