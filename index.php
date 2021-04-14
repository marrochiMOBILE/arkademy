<?php 
@require_once 'conn.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkademy</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.24/af-2.3.5/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/cr-1.5.3/date-1.0.3/fc-3.3.2/fh-3.1.8/kt-2.6.1/r-2.2.7/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.3/datatables.min.css"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.24/af-2.3.5/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/cr-1.5.3/date-1.0.3/fc-3.3.2/fh-3.1.8/kt-2.6.1/r-2.2.7/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.3/datatables.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<nav class="navbar navbar-dark bg-dark">
  <span class="navbar-brand mb-0 h1">Arkademy</span>
</nav>


    <div class="row mt-5">
        <div class="col-sm-6 card mx-auto">
        <a href="tambah.php" class="mt-4 btn btn-dark">+</a><br>
        <table id="example" class="table table-striped " style="width:100%">
        <thead class="table-dark">
            <tr>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>harga</th>
                <th>jumlah</th>
                <th>opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $sql = "SELECT * FROM produk";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>".$row['nama_produk']."</td>
                <td>".$row['keterangan']."</td>
                <td>".$row['harga']."</td>
                <td>".$row['jumlah']."</td>
                <td> 
                <a href='ubah.php?id=".$row['nama_produk']."' style='padding:2%;' class='bg-dark'><i class='fa fa-bars text-white'></i> </a>  &nbsp; 
                <a href='hapus.php?id=".$row['nama_produk']."' style='padding:2%;' class='bg-dark'><i class='fa fa-trash-o text-white'></i> </a>
                </td>
            </tr>";
          }
        } else {
          echo "<tr>
          <td>kosong 0</td>
      </tr>";
        }
        
        
        ?>
           
        </tbody>
        <tfoot>
            <tr>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>harga</th>
                <th>jumlah</th>
                <th>opsi</th>
            </tr>
        </tfoot>
    </table>
    <div class="mt-5"></div>
        </div>
    </div>


<script >
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>