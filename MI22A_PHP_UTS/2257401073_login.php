<?php
/**
 * NIM : 2257401073
 * NAMA : MASAYU NISA ATIKA
 * KELAS MI22A
 */
    include 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
         .container{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            padding: 20px 25px;
            width: 300px;
            background-color: rgba(0,0,0,.7);
            box-shadow: 0 0 10px rgba(255,255,255,.3);
        }
        .container h1{
            text-align: left;
            color: #fafafa;
            margin-bottom: 30px;
            text-transform: uppercase;
            border-bottom: 4px solid bisque;;
        }
        .container label{
            text-align: left;
            color: #fff;
        }
        .container form input{
            width: calc(100% - 20px);
            padding: 8px 10px;
            margin-bottom: 15px;
            border: none;
            background-color: transparent;
            border-bottom: 2px solid bisque;;
            color: #fff;
            font-size: 20px;
        }
        .container form button{
            width: 100%;
            padding: 5px 0;
            border: none;
            background-color:bisque;;
            font-size: 18px;
            color: black;
        }    
    </style>

</head>
    <body>
    <div class="container border">
        <div class="row align-items-center py-3 px-xl-5">
            <div>
                <h1>Login</h1>
                <form action="" method="POST">
                    <label for="username">Username :</label><br>
                    <input type="text" name="username" id="username"><br><br>
                    <label for="password">Password :</label><br>
                    <input type="password" name="password" id="password"><br><br>
                    <button type="submit" name="login">Login</button>
                </form>

    <?php 
      if( isset($_POST["login"])){
        if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
            echo "<p style='color: white;'>" . "Login Berhasil" . "</p>";
        } else {
        $error = true;
        }
    }
    ?>

    <?php if( isset($error)) : ?>
        <p style="color: white; font-style: italic ">Username / Password Tidak Sesuai</p>
    <?php endif; ?>
            </div>
        </div>     
    </div>
    </body>
</html>	