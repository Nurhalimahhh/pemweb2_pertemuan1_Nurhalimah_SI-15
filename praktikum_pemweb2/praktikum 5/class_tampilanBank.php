<?php
require_once "class_accountBank.php";

$b1 = new akun('K001','Hana', number_format(7000000,0,".","."));
$b2 = new akun('K002','Hani', number_format(6450000,0,".","."));
$b3 = new akun('K003','Hanin',number_format(10500000,0,".","."));
$bank = [$b1,$b2,$b3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <table class="table">
        <h1 class="text-center mt-3">Bank kong</h1>
        <div class="container-fluid mb-3">
            <div class="row">
                <div class="col-md-5">
                <blockquote class="blockquote">
                <p>Aktivitas :</p>
                </blockquote>
                <p class="lead">Hana nabung Rp. 2.000.000 <br>
                Hanin tarik uang Rp. 3.500.000</p>
                </div>
            </div>
        </div>
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">No Akun</th>
            <th scope="col">Pemilik</th>
            <th scope="col">Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor=1;
            foreach($bank as $bk){
            ?>
                <tr>
                    <td scope="row"><?=$nomor?></td>
                    <td><?=$bk->no_akun?></td>
                    <td><?=$bk->pemilik?></td>
                    <td><?=$bk->saldo?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>