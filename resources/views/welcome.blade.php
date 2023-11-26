<?php
    require __DIR__.'\connection.php';

if (isset($_COOKIE['login'])){
    echo '<script> window.open("'.__DIR__.'\index.php", "_self") </script>';
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($connection,"SELECT * FROM m_users WHERE username='$username'");
    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password,$row['password'])){

            echo '<script>
                console.log("us");
                document.cookie = "login=true";
                document.cookie = "username='.$row['username'].'";
            window.location.replace("foods", "_self")  </script>';
        }
    }
    
$error=true;
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Login Page</title>
    <style>
    #container {
        display:block;
        margin: auto;
        margin-top:15%;
        margin-left:auto;
        margin-right:auto;
        width:24%;
        min-width:380px;
        background-color:white;
        border:3px solid blue;
        border-radius:10px;
    }
    </style>
</head>
<body>
<div id="container">
    <form action="" method="POST">
        @csrf  
        @method('GET')
    <table cellpadding=10 style="border-collapse:collapse">
        <tr>
            <th colspan="3">LOGIN Page</td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan=3 style="text-align:center;"><button type="submit" name="login">Login</button></td>
        </tr>
    </form>
    </table>
    <?php
    if (isset($error)){ ?>
    <p style="color:red;font-style:italic"> Wrong Username / Password</p>
    <?php } ?>
    </div>
</body>
</html>
