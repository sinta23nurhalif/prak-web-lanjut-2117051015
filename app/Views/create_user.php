<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div>
    <center>
    <?php $validation = \Config\Services::validation();?>

    <form action="<?= base_url('/user/store')?>" method="POST" enctype="multipart/form-data"> 
        <label for="">Nama : </label>
        
        <input class="form-control <?= (empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>" type="text" placeholder="Default input" aria-label="default input example" type="text" name="nama" id="nama" style="width: 20%" value="<?= old('nama') ?>">
        <?= validation_show_error('nama'); ?>
        <br>
        <br>
        
        <label for="">NPM  : </label>
        <input class="form-control <?= (empty(validation_show_error('npm'))) ? '' : 'is-invalid' ?>" type="text" placeholder="Default input" aria-label="default input example" type="text" name="npm" id="npm" style="width: 20%" value="<?= old('nama') ?>">
        <?= validation_show_error('npm'); ?>
        <br>
        <br>

        
        <label for="">Kelas : </label>
        <select name="kelas" id="kelas">
            <?php
            foreach ($kelas as $item){
            ?>
                <option value="<?= $item['id']?>">
                    <?= $item['nama_kelas'] ?>
                </option>
            <?php
            }
            ?>
        </select>
        <br>
        <!-- <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" type="text" name="kelas" id="" style="width: 20%"> -->
        <br>

        <center>
        <label for="">foto : </label>
        <input type="file" name="foto"  id="foto" accept="image/*" required>
        <!-- <input type="submit" name="submit" value="Upload"> -->
        </center>
        <br>
        
        <button type="submit" class="btn btn-secondary" >Submit</button>
    </form>

    
    </center>
</div>
<?= $this->endSection() ?>
