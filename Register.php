<?php
    $connection = mysqli_connect('localhost','root','','registerform');
    if (isset($_POST['submit'])) {
      $a = $_POST['name'];
      $b = $_POST['email'];
      $c = $_POST['password'];
    
      $insert_query = "insert into signup(Name,Email,Password) values('$a','$b','$c')";
      $execute = mysqli_query($connection,$insert_query);
      header('location:index.html');

    }


?>