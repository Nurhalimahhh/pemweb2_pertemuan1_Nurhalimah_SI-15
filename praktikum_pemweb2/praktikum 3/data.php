<?php
  $mahasiswa = [
    ["id" => 1,"nama" => "Nisa", "nim" => "0110220160", "uts" => 89, "uas" => 85, "tugas" => 100],
    ["id" => 2,"nama" => "Opang", "nim" => "0110220161", "uts" => 88, "uas" => 90, "tugas" => 95],
    ["id" => 3,"nama" => "Mimi", "nim" => "0110220162", "uts" => 86, "uas" => 86, "tugas" => 95],
    ["id" => 4,"nama" => "Agis", "nim" => "0110220163", "uts" => 84, "uas" => 90, "tugas" => 100],
    ["id" => 5,"nama" => "Laila", "nim" => "0110220164", "uts" => 92, "uas" => 95, "tugas" => 95],
    ["id" => 6,"nama" => "Fadilah", "nim" => "0110220165", "uts" => 90, "uas" => 89, "tugas" => 95],
    ["id" => 7,"nama" => "Aminah", "nim" => "0110220166", "uts" => 93, "uas" => 88, "tugas" => 90],
    ["id" => 8,"nama" => "Kamal", "nim" => "0110220167", "uts" => 85, "uas" => 93, "tugas" => 92],
    ["id" => 9,"nama" => "Risna", "nim" => "0110220168", "uts" => 84, "uas" => 95, "tugas" => 88],
    ["id" => 10,"nama" => "Sinta", "nim" => "0110220169", "uts" => 85, "uas" => 80, "tugas" => 90],
  ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Daftar Nilai</title>

  <?php
    include 'fungsi.php'
  ?>
</head>
<body>
  <table class="table table-striped table-primary">
    <thead>
      <th>ID</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>UTS</th>
      <th>UAS</th>
      <th>Tugas</th>
    </thead>

    <tbody>
      <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
          <td><?= $mhs["id"] ?></td>
          <td><?= $mhs["nama"] ?></td>
          <td><?= $mhs["nim"] ?></td>
          <td><?= $mhs["uts"] ?></td>
          <td><?= $mhs["uas"] ?></td>
          <td><?= $mhs["tugas"] ?></td>
        </tr>
      <?php endforeach;  ?>
      
    </tbody>
  </table>
</body>
<?php
    include 'bawah.php'
?>
</html>