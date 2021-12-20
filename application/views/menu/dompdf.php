<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Laporan</title>
   <link rel="stylesheet" href="">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <style>
      .line-title {
         border: 0;
         border-style: inset;
         border-top: 1px solid #000;
      }
   </style>
</head>

<body>
   <!-- <img src="assets/img/logo.jpg" style="position: absolute; width: 60px; height: auto;"> -->
   <table style="width: 100%;">
      <tr>
         <td align="center">
            <span style="line-height: 1.6; font-weight: bold;">
               UNIVERSITAS IBN KHALDUN BOGOR
               <br>SERTFIKAT WEBSITE
            </span>
         </td>
      </tr>
   </table>

   <hr class="line-title">
   <p align="center">
      LAPORAN DATA MAHASISWA <br>
      <b>Angkatan 2018</b>
   </p>
   <table class="table table-bordered">
      <tr>
         <th scope="col">No</th>
         <th scope="col">Nama Acara</th>
         <th scope="col">Tema Acara</th>
         <th scope="col">Tanggal Acara</th>
         <th scope="col">Tempat Acara</th>
         <th scope="col">Narasumber 1</th>
         <th scope="col">Narasumber 2</th>
         <th scope="col">Narasumber 3</th>
      </tr>
      <?php $i = 1;
      foreach ($acara as $ac) : ?>
         <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $ac['nama_acara']; ?></td>
            <td><?= $ac['tema_acara']; ?></td>
            <td><?= $ac['tanggal_acara']; ?></td>
            <td><?= $ac['tempat_acara']; ?></td>
            <td><?= $ac['narasumber_acara_1']; ?></td>
            <td><?= $ac['narasumber_acara_2']; ?></td>
            <td><?= $ac['narasumber_acara_3']; ?></td>
         </tr>
      <?php endforeach ?>
   </table>

</body>

</html>