<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div>
    <center>
    <?php $validation = \Config\Services::validation();?>

    <form action="<?= base_url('/user/store')?>" method="POST">
        <label for="">Nama : </label>
        
        <input class="form-control <?= (empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>" type="text" placeholder="Default input" aria-label="default input example" type="text" name="nama" id="" style="width: 20%" value="<?= old('nama') ?>">
        <?= validation_show_error('nama'); ?>
        <br>
        <br>
        
        <label for="">NPM  : </label>
        <input class="form-control <?= (empty(validation_show_error('npm'))) ? '' : 'is-invalid' ?>" type="text" placeholder="Default input" aria-label="default input example" type="text" name="npm" id="" style="width: 20%" value="<?= old('nama') ?>">
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
        <!-- <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" type="text" name="kelas" id="" style="width: 20%"> -->
        <br>
        
        <button type="submit" class="btn btn-secondary" >Submit</button>
    </form>

    
    </center>
</div>
<?= $this->endSection() ?>
