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
    <title>Form Perulangan</title>
    <style>
    .container{
            width: 300px;
            background: gray;
            padding: 20px 25px;
            border-radius: 5px;
            background-color: rgba(0,0,0,.7);
            box-shadow: 0 0 10px rgba(255,255,255,.3);
            margin-top: 15px;
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
        .profile-table {
            width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 1px #ccc;
            margin-top: 50px;
        }
        .profile-table table {
            width: 100%;
            border-collapse: collapse;
        }
        .profile-table th, .profile-table td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: left;
        }
    </style>
</head>
    <body>
        <div class="container border">
            <div class="row align-items-center py-3 px-xl-5">
                <div>
                    <h1>Form Perulangan</h1>
                    <form action="" method="POST">
                        <label for="nim">NIM</label><br>
                        <input type="teks" name="nim" id="nim"><br><br>
                        <label for="nama">NAMA</label><br>
                        <input type="teks" name="nama" id="nama"><br><br>
                        <label for="kelas">KELAS</label><br>
                        <input type="teks" name="kelas" id="kelas"><br><br>
                        <label for="email">EMAIL</label><br>
                        <input type="email" name="email" id="email"><br><br>
                        <label for="nomor">NOMOR HP</label><br>
                        <input type="teks" name="nomor" id="nomor"><br><br>
                        <button type="submit" name="simpan">Simpan</button>
                    </form>
                </div>
            </div>     
        </div>

        <div class="profile-table">
            <table>
                <tr>
                    <th>NIM</th>
                    <td><?php if(isset($_POST['simpan'])){echo htmlspecialchars($_POST['nim']);} ?></td>
                </tr>
                <tr>
                    <th>NAMA</th>
                    <td><?php if(isset($_POST['simpan'])){echo htmlspecialchars($_POST['nama']);} ?></td>
                </tr>
                <tr>
                    <th>KELAS</th>
                    <td><?php if(isset($_POST['simpan'])){echo htmlspecialchars($_POST['kelas']);} ?></td>
                </tr>
                <tr>
                    <th>EMAIL</th>
                    <td><?php if(isset($_POST['simpan'])){echo htmlspecialchars($_POST['email']);} ?></td>
                </tr>
                <tr>
                    <th>NOMOR HP</th>
                    <td><?php if(isset($_POST['simpan'])){echo htmlspecialchars($_POST['nomor']);} ?></td>
                </tr>
            </table>
        </div>
    </body>
</html>