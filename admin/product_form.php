<br>
<?php
error_reporting(0);
$obj_produk = new Produk();
$data_produk = $obj_produk->dataProduk();
$idedit = $_REQUEST['idedit'];
$prod = !empty($idedit) ? $obj_produk->getProduk($idedit) : array() ;

?>
<form action="produk_controller.php" method="POST">
<h1 style="text-align:center">FORM INPUT PRODUK</h1>
<br>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
          <input id="kode" name="kode" type="text" class="form-control"  value="<?= $prod['kode']?>" placeholder="Masukan kode produk">
        </div>
      </div>
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Nama Produk</label> 
        <div class="col-8">
          <input id="nama" name="nama" type="text" class="form-control" value="<?= $prod['nama']?>" placeholder="Masukan nama produk">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Harga Beli</label> 
        <div class="col-8">
          <input id="harga_beli" name="harga_beli" type="number" min="0" class="form-control" value="<?= $prod['harga_beli']?>" placeholder="Masukan harga beli produk">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Harga Jual</label> 
        <div class="col-8">
          <input id="harga_jual" name="harga_jual" type="number" min="0" class="form-control" value="<?= $prod['harga_jual']?>" placeholder="Masukan harga jual produk">
        </div>
      </div>
      <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Stok</label> 
        <div class="col-8">
          <input id="stok" name="stok" type="number" min="0" class="form-control" value="<?= $prod['stok']?>" placeholder="Masukan stok produk">
        </div>
      </div>
      <div class="form-group row">
        <label for="text5" class="col-4 col-form-label">Minimal Stok</label> 
        <div class="col-8">
          <input id="min_stok" name="min_stok" type="number" min="0" class="form-control" value="<?= $prod['min_stok']?>" value="<?= $prod['min_stok']?>" placeholder="Masukan minimal stok produk">
        </div>
      </div>
      <div class="form-group row">
        <label for="text6" class="col-4 col-form-label">Jenis Produk ID</label> 
        <div class="col-8">
          <input id="jenis_produk_id" name="jenis_produk_id" min="1" max="4" type="number" value="<?= $prod['jenis_produk_id']?>" class="form-control" placeholder="Masukan jenis produk">
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
          <button href="index.php?url=product" class="btn btn-danger">Cancel</button> -->
        </div>
      </div>
</form>
<br>