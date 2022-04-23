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
class Lingkaran { // buka class
    private $jari;
    const PHI = 3.14;
    function __construct($r) {
        $this->jari = $r;
    }
    function getLuas() {
        return self::PHI * $this->jari * $this->jari;
    }
    function getKeliling() {
        return 2 * self::PHI * $this->jari;
    }
} // tutup class
?>

<?php
class Mahasiswa
{
    var $nim;
    var $nama;
    var $thn_angkatan;
    var $prodi;
    var $ipk;
    function __construct($nim, $nama)
    {
        $this->nim = $nim;
        $this->nama = $nama;
    }
    function predikat_ipk()
    {
        if ($this->ipk < 2.0)
            return "Cukup";
        else if ($this->ipk >= 2.0 && $this->ipk < 3.0)
            return "Baik";
        else if ($this->ipk >= 3.0 && $this->ipk < 3.75)
            return "Memuaskan";
        else if ($this->ipk >= 3.75 && $this->ipk <= 4)
            return "Baik";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    include_once 'class_mahasiswa.php';
    $siswa = new Mahasiswa (02017,'Anisa Wahyuni');
    $siswa->thn_angkatan = 2013;
    $siswa->prodi = 'TI';
    $siswa->ipk = 3.8;

    $siswa1 = new Mahasiswa (02016,'Silmi Rohmahtilah');
    $siswa1->thn_angkatan = 2013;
    $siswa1->prodi = 'TI';
    $siswa1->ipk = 3.7;
    
    $siswa2 = new Mahasiswa (01014,'Balgis Trijayanti');
    $siswa2->thn_angkatan = 2014;
    $siswa2->prodi = 'SI';
    $siswa2->ipk = 3.6;

    $siswa3 = new Mahasiswa (01013,'Siti Nurlaila');
    $siswa3->thn_angkatan = 2014;
    $siswa3->prodi = 'SI';
    $siswa3->ipk = 3.3;

    $arr_siswa = [$siswa,$siswa1,$siswa2,$siswa3];
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">WEB02</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Review PHP
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        PHP OOP
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    </ul>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Login
                                    </a>
                                </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                NIM
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Prodi
                            </th>
                            <th>
                                Thn Angkatan
                            </th>
                            <th>
                                IPK
                            </th>
                            <th>
                                Predikat
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 1;
                        foreach ($arr_siswa as $mhss){
                        echo '<tr>
                            <td>'.$counter.'</td>
                            <td>'.$mhss->nim.'</td>
                            <td>'.$mhss->nama.'</td>
                            <td>'.$mhss->prodi.'</td>
                            <td>'.$mhss->thn_angkatan.'</td>
                            <td>'.$mhss->ipk.'</td>
                            <td>'.$mhss->predikat_ipk().'</td>
                        </tr>';
                        $counter ++;
                    }
                        ?>
                    </tbody>
                </table>
                <address>
                    <strong>Lab Pemrograman Web Lanjutan</strong><br />Dosen: Sirojul Munir S.Si,M.Kom<br />Mahasiswa: Muhammad Raihan<br />STT-NF - Kampus B<br />
                </address>
            </div>
        </div>
    </div>
</body>

</html>

<?php
require_once "class_persegipanjang.php";
$ppanjang1 = new PersegiPanjang(10,5);
$ppanjang2 = new PersegiPanjang(5,3);
echo "<br>Luas Persegi Panjang I ".$ppanjang1->getLuas();
echo "<br>Luas Persegi Panjang II ".$ppanjang2->getLuas();
echo "<br>Keliling Persegi Panjang I ".$ppanjang1->getKeliling();
echo "<br>Keliling Persegi Panjang II ".$ppanjang2->getKeliling();
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
