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
    <title>Form Loop</title>
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
    </style>

</head>
    <body>
        <div class="container border">
            <div class="row align-items-center py-3 px-xl-5">
                <div>
                    <h1>Form Perulangan</h1>
                    <form action="" method="POST">
                        <label for="teks">Teks</label><br>
                        <input type="teks" name="teks" id="teks"><br><br>
                        <label for="jml">Jumlah Perulangan</label><br>
                        <input type="number" name="jml" id="jml"><br><br>
                        <button type="submit" name="cetak">Cetak</button>
                    </form>
                </div>
<?php
if(isset($_POST['cetak'])){
    $t = $_POST['teks'];
    $j = $_POST['jml'];
    for($i=1; $i<=$j; $i++)
        echo "<p style='color: white;'>". $i . " - $t<br>" . "</p>";
    }
?>
            </div>     
        </div>
        

    </body>
</html>