<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if (isset($_SESSION['useremail'])) {
            echo "Welcome : " .$_SESSION['useremail'];
        }
        else {
           header('location:login.html');
        }      
    ?>
    <button>
        <a href="logout.php">Logout</a>
    </button>
</body>
</html>