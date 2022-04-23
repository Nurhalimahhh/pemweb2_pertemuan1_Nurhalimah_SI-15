<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fixed Layout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Nurhalmah</a></li>
              <li class="breadcrumb-item"><a href="#">0110121306</a></li>
              <li class="breadcrumb-item active">Semester 2</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
    $ar_buah = ["Pepaya", "Mangga","Pisang","Jambu"];
    
    // echo $ar_buah[0]; // Pepaya

    // echo "<br />";

    // sort($ar_buah); // untuk mengurutkan nilai array berdasarkan abjad / nomor
    // echo $ar_buah[0];

    /** @array_pop */
    // foreach($ar_buah as $buah) {
    //   echo $buah;
    //   echo "<br />";
    // }

    // echo "<br />";

    // array_pop($ar_buah); // untuk menghapus nilai terakhir di array

    // foreach($ar_buah as $buah) {
    //   echo $buah;
    //   echo "<br />";
    // }

    // array_push($ar_buah, 'kelengkeng'); // untuk menambahkan nilai di akhir array

    // foreach ($ar_buah as $buah) {
    //   echo $buah;
    //   echo "<br />";
    // }

    // array_shift($ar_buah); // untuk menghapus nilai awal di array

    // foreach ($ar_buah as $buah) {
    //   echo $buah;
    //   echo "<br />";
    // }

    array_unshift($ar_buah, 'rambutan'); // untuk menambakan nilai di awal array

    foreach ($ar_buah as $buah) {
      echo $buah;
      echo "<br />";
    }

    /**  untuk cek ar_buah udah ada ga? */
    // echo $ar_buah[0];
    // echo "<br />";
    // echo $ar_buah[1];
    // echo "<br />";
    // echo $ar_buah[2];
    // echo "<br />";
    // echo $ar_buah[3];
    // echo "<br />";

    // foreach ($ar_buah as $buah) {
    //   echo $buah;
    //   echo "<br />";
    // }
  ?>

</body>
</html>

<?php
  $mahasiswa = [
    ["id" => 1,"nama" => "ilham", "nim" => "0110220153", "uts" => 100, "uas" => 100],
    ["id" => 2,"nama" => "nur", "nim" => "0110220155", "uts" => 10, "uas" => 10],
  ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <table class="table table-striped">
    <thead>
      <th>ID</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>UTS</th>
      <th>UAS</th>
    </thead>

    <tbody>
      <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
          <td><?= $mhs["id"] ?></td>
          <td><?= $mhs["nama"] ?></td>
          <td><?= $mhs["nim"] ?></td>
          <td><?= $mhs["uts"] ?></td>
          <td><?= $mhs["uas"] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>

<?php
  // Variable user
  $nama = 'nur';
  $umur = 19;
  $berat = 50;

  $nama = 'zaki';

  echo 'Nama saya '.$nama.' umur saya '.$umur.' berat saya '.$berat;
  echo "<br />";
  echo "<h1 style='color: red'>Nama saya $nama, umur saya $umur, berat saya $berat</h1>";
  echo "<br />";

  // Variable sistem
  // variable built in php
  echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
  echo "<br />";

  // Variable konstan
  // adalah variable yang tidak bisa diubah nilainya
  define('makanan', 'sushi');
  // define('makanan', 'jambu');
  echo '<h1 style="color: blue">'.makanan.'</h1>';
  echo makanan;
?>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php 
include_once 'footer.php';
?>

</div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php 
include_once 'footer.php';
?>

