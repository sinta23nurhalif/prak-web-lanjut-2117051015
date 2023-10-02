<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>


<div class="container">
    <figure>
        <h1>DATA MAHASISWA</h1>
    </figure>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th class="col justify-content-center text-center">ID</th>
                <th class="col justify-content-center text-center">Nama</th>
                <th class="col justify-content-center text-center">NPM</th>
                <th class="col justify-content-center text-center">Kelas</th>
                <th class="col justify-content-center text-center" style="width: 220px;">Aksi</th>
            </tr>
        </thead>
            <tbody>
                <?php 
                    foreach($user as $user){
                ?>
                    <tr>
                        <td class="col justify-content-center text-center"><?= $user['id'] ?></td>
                        <td class="col justify-content-center"><?= $user['nama'] ?></td>
                        <td class="col justify-content-center text-center"><?= $user['npm'] ?></td>
                        <td class="col justify-content-center text-center"><?= $user['nama_kelas'] ?></td>
                        <td class="col justify-content-center text-center">
                            <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>        
    </table>

</div>
<?= $this->endSection() ?>