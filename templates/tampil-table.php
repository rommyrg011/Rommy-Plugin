
<!-- Memasukkan Link css bootsrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap5.css">
<!-- end css -->
<?php
//untuk print API langsung dari plugin sendiri
// print_r(wc_get_products([]));
?>

<br>
<br>
<center><h1>Data Produk Woocommerce</h1></center>
<hr>

<div class="notice update is-dismissible mb-3" style="margin-left: 0;">
        <p>Ini adalah tabel dari produk Woocommerce</p>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Tambah
</button>

<!-- Bagian modal tambah  -->
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <input type="text" class="form-control" name="" placeholder="Nama Barang">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<?php
// Periksa apakah WooCommerce diaktifkan
if ( class_exists( 'WooCommerce' ) ) { // kode  class_exists fungsinya memeriksa plugin terinstall atau tidak

    // Ambil daftar produk
    $args = array(
        'post_type' => 'product', // Jenis pos yang ingin diambil adalah produk Woocommerce
        'posts_per_page' => 0,   // Mengambil semua produk tanpa batasan.Misal di ganti angka 1 maka 1 data saja yang muncul
    );
    $products = wc_get_products( $args ); // Mengambil daftar produk menggunakan wc_get_products(), ini adalah method bawaan woocommerce

    // Memeriksa apakah ada produk yang tersedia maka di lakukan menggunakan if
    if ( ! empty( $products ) ) {
        // Mulai membuat tabel HTML untuk menampilkan data produk dengan Bootstrap 5
        ?>
   <table id="example" class="table table-striped" style="width:100%">
            <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Tanggal Publish</th> 
                    </tr>
            </thead>

       <tbody>
        <?php
        // Iterasi/proses pengujian apakah ada, melalui setiap produk
        foreach ( $products as $product ) {
            // Mengambil informasi produk
            $product_name = $product->get_name(); // Nama produk
            $product_price = $product->get_price_html(); // Harga produk
            $product_description = $product->get_description(); // Deskripsi produk
            $product_status = $product->get_stock_status(); // Status stok produk
            $product_date = $product->get_date_created(); // Tanggal produk dipublish

            //Dari semua di atas dapat dari print API

            // Menampilkan informasi produk dalam baris tabel HTML/ looping data dari foreach di atas
            ?>
           <tr>
                <td><?= $product_name; ?></td>
                <td><?= $product_price; ?></td>
                <td><?= $product_description; ?></td>
                <td><?= $product_status; ?></td> 
                <td><?= $product_date->format('Y-m-d H:i:s'); // Di tambahkan Format tanggal?></td> 
           </tr>

        <?php } // Selesai membuat tabel HTML / penutup ?>

       </tbody>
    </table>
       <?php
    } else {
        // Jika tidak ada produk yang tersedia / error
        echo 'Tidak ada produk yang tersedia.';
    }
}
?>
<script type="text/javascript">
    $('#example').DataTable();
</script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap5.js"></script>

