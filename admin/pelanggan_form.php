<br>
<?php
error_reporting(0);
$obj_pelanggan = new Pelanggan();
$data_pelanggan = $obj_pelanggan->dataPelanggan();
$idedit = $_REQUEST['idedit'];
$pelanggan = !empty($idedit) ? $obj_pelanggan->getPelanggan($idedit) : array() ;

?>
<form action="pelanggan_controller.php" method="POST">
    <h1 style="text-align:center">FORM INPUT PELANGGAN</h1>
    <br>
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
            <input id="kode" name="kode" type="text" class="form-control" value="<?= $pelanggan['kode']?>" placeholder="Masukan kode pelanggan">
        </div>
    </div>
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
            <input id="nama_pelanggan" name="nama_pelanggan" type="text" class="form-control" value="<?= $pelanggan['nama_pelanggan']?>" placeholder="Masukan nama pelanggan">
        </div>
    </div>
    <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Jenis Kelamin</label> 
    <div class="col-8">
        <input type="radio" id="jk_l" name="jk" value="L" <?php if ($pelanggan['jk'] == 'L') echo 'checked'; ?>> L <br>
        <input type="radio" id="jk_p" name="jk" value="P" <?php if ($pelanggan['jk'] == 'P') echo 'checked'; ?>> P
    </div>
    </div>
    <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Tempat Lahir</label> 
        <div class="col-8">
            <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="<?= $pelanggan['tmp_lahir']?>" placeholder="Masukan tempat lahir">
        </div>
    </div>
    <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Tanggal Lahir</label> 
        <div class="col-8">
            <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="<?= $pelanggan['tgl_lahir']?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="text5" class="col-4 col-form-label">Email</label> 
        <div class="col-8">
            <input id="email" name="email" type="email" class="form-control" value="<?= $pelanggan['email']?>" placeholder="Masukan email pelanggan">
        </div>
    </div>
    <div class="form-group row">
        <label for="text6" class="col-4 col-form-label">Kartu ID</label> 
        <div class="col-8">
            <input id="kartu_id" name="kartu_id" type="number" min="1" class="form-control" value="<?= $pelanggan['kartu_id']?>" placeholder="Masukan ID Kartu pelanggan">
        </div>
    </div> 
    <div class="form-group row">
        <label for="text6" class="col-4 col-form-label">Alamat</label> 
        <div class="col-8">
            <input id="alamat" name="alamat" type="text" class="form-control" value="<?= $pelanggan['alamat']?>" placeholder="Masukan alamat pelanggan">
        </div>
    </div>  
    <div class="form-group row">
        <div class="offset-4 col-8">
        <?php

            if(empty($idedit)){

        ?>
            <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
        <?php
            }
            else {
        ?>
            <button name="proses" type="submit" value="ubah" class="btn btn-primary">Update</button>
            <input type="hidden" name="idx" value="<?= $idedit ?>">
        <?php
            }
        ?>
            <button name="proses" type="submit" value="batal" class="btn btn-danger">Cancel</button>
            <!-- <button type="reset" class="btn btn-warning">Reset</button>
            <button href="index.php?url=pelanggan" class="btn btn-danger">Cancel</button> -->
        </div>
    </div>
</form>