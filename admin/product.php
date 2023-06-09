<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new Produk();
$data_produk = $model->dataProduk();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }

$sesi = $_SESSION['MEMBER'];
if(isset($sesi)){

?>
                        <h1 class="mt-4">TABLE PRODUK</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Tabel disini berisi data produk yang ada di toko
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Produk
                            </div>
                            

                            <div class="card-body">
                            <div class="card-header">
                            <?php 
                                if($sesi['role'] != 'staff'){
                                ?> 
                                <!-- membuat tombol mengarahkan ke file produk_form.php -->
                                <a href="index.php?url=product_form" class="btn btn-primary btn-sm"> Tambah</a>
                            <?php } ?>
                            </div>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Jenis Produk </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- hapus dari baris 64 sampai 511 -->
                                        <!-- dari <tr> ke </tr> -->
                                        <?php
                                        $no = 1;
                                        foreach($data_produk as $row){

                                            ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row['kode']?></td>
                                            <td><?= $row['nama']?></td>
                                            <td><?= $row['harga_beli']?></td>
                                            <td><?= $row['harga_jual']?></td>
                                            <td><?= $row['stok']?></td>
                                            <td><?= $row['min_stok']?></td>
                                            <td><?= $row['jenis_produk_id']?></td>
                                            <td>
                                                <form action="produk_controller.php" method="POST">
                                                    <a class="btn btn-info btn-sm" href="index.php?url=product_detail&id=<?= $row ['id'] ?>">Detail</a>
                                                    <?php 
                                                        if($sesi['role'] == 'admin'){
                                                    ?>
                                                    <a class="btn btn-warning btn-sm" href="index.php?url=product_form&idedit=<?= $row ['id']?>">Ubah</a>
                                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" 
                                                    onclick="return confirm('Anda yakin akan dihapus?')">Hapus</button>
                                                    <!-- <a class="btn btn-warning btn-sm">Ubah</a>
                                                    <a class="btn btn-danger btn-sm">Hapus</a>
                                                    -->
                                                    <input type="hidden" name="idx" value="<?= $row['id']?>">

                                                    <?php
                                                    }
                                                    ?>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++; 
                                    } 
                                        ?>
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Jenis Produk </th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot> -->
                                </table>
                            </div>

</div>
</div>

                <?php
                    include_once 'bottom.php';
                ?>

<?php
} else {
    echo '<script> alert("anda tidak boleh masuk");history.back();</script>';
}
?>