<?php
    $connection = mysqli_connect('localhost','root','','registerform');
    session_start();
    if (isset($_POST['login'])) {
       $mail = $_POST['email'];
       $pswd = $_POST['password'];
       $check_data = "select  * from signup where Email = '$mail' and Password ='$pswd'";
       $run = mysqli_query($connection,$check_data);
       $verify = mysqli_num_rows($run);
       if ($verify == 1) {
          $_SESSION['useremail'] = $mail;
          echo "<script>
            alert('Login Successful');
            window.location.href='Deashboard.php';
           </script>";
       } else {
        echo "<script>
        alert('Invalid Credentials');
        window.location.href='login.html';
       </script>";
       }
       
    }
?>