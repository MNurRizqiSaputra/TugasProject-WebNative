<br>
<?php
error_reporting(0);
$obj_pesanan = new Pesanan();
$data_pesanan = $obj_pesanan->dataPesanan();
$idedit = $_REQUEST['idedit'];
$pesanan = !empty($idedit) ? $obj_pesanan->getPesanan($idedit) : array() ;

?>
<form action="pesanan_controller.php" method="POST">
    <h1 style="text-align:center">FORM INPUT PESANAN</h1>
<br>
    <div class="form-group row">
        <div class="form-group row">
            <label for="text4" class="col-4 col-form-label">Tanggal</label> 
            <div class="col-8">
                <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $pesanan['tanggal']?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="text6" class="col-4 col-form-label">Total</label> 
            <div class="col-8">
                <input id="total" name="total" type="number" class="form-control" value="<?= $pesanan['total']?>" placeholder="Masukan total uang yang harus dibayar pelanggan">
            </div>
        </div> 
        <div class="form-group row">
            <label for="text6" class="col-4 col-form-label">Pelanggan ID</label> 
            <div class="col-8">
                <input id="pelanggan_id" name="pelanggan_id" type="number" min="1" class="form-control" value="<?= $pesanan['pelanggan_id']?>" placeholder="Masukan ID pelanggan">
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
                <button href="index.php?url=pesanan" class="btn btn-danger">Cancel</button> -->
            </div>
        </div>
</form>