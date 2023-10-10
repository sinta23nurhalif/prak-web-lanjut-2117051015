<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('./css/style.css'); ?>">
    <title>Document</title>
</head>
<body>
<!-- <img src="foto_formal_sintaaa.jpeg" style="width:500px;height:400px; border-radius: 50%;"  -->

    <!-- <center>
    </center> -->

    <center>
      <div class="container">
        <div class="w-100 d-grid border gap-2" style="height: 100vh: place-content: center:">
          <div class="w-50 text-center border m-auto">
          <img src="<?= $user['foto'] ?? base_url('/assets/img/foto_def.png')?>" alt="foto" style="height: 250px; width: 250px; border-radius: 50%; object-fit: cover; object-position: 0 -8px;"  border="2px" ><br>
          </div>
          <div class="nama"><?= $user['nama'] ?></div>
          <div class="npm"><?= $user['npm'] ?></div>
          <div class="nama_kelas"><?= $user['nama_kelas'] ?></div>
        </div>
</center>

</body>
</html>