<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chnage Password</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <form action="" method="POST" id="signup-form" class="signup-form">
                    <h2>Chnage Password</h2>
                    

                    <div class="form-group">
                        <input type="text" class="form-input" name="OPswd" id="password" placeholder="Current Password" required/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="NPswd" id="password" placeholder="New Password" required/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="CPswd" id="password" placeholder="Confirm Password" required/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" id="submit" class="form-submit submit" value="Change"/>
                        <a href="Deashboard.html" class="submit-link submit">Back</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <?php

        $con = mysqli_connect('localhost', 'root', '', 'registerform');
        session_start();
        if (isset($_POST['login'])) 
        {
            if (isset($_SESSION['useremail'])) 
            {
                $email = $_SESSION['useremail'];
                $fetch_query = "select * from signup where Email = '$email'";
                $execute = mysqli_query($con, $fetch_query);
                $data = mysqli_fetch_assoc($execute);
                $userid= $data['Id'];
                $userpswd= $data['Password'];

                $old_pswd = $_POST['OPswd'];
                $New_pswd = $_POST['NPswd'];
                $Confirm_pswd = $_POST['CPswd'];

                if ($userPswd == $Old_pswd) 
                {
                    if($New_pswd == $Confirm_pswd){
                        $update_query = "update signup set Password = '$New_pswd' where Id = '$userid'";
                        $run = mysqli_query($con, $update_query);
                        echo "<script>
                                alert('Password Chnaged')
                            </script>"
                    }
                    else 
                    {
                        echo "<script>
                                alert('New and Confirm Password must be same')
                            </script>"
                        
                    } 
                }
            }
        }

    ?>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>