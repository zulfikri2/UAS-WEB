<button id="addButton" class="btn btn-primary">Tambah Data</button>
<br>
<br>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="container">
<div class="card">
            <div class="card-body">
                <div class="mb-2">
                </div>
   <table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>No.</th>
            <th>Merk Hp</th>
            <th>Tipe Hp</th>
            <th>Tahun Prodksi</th>
            <th>Aksi</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
   include "koneksi.php";
   $no=1;
   $query=mysqli_query($koneksi, "SELECT * FROM dat ORDER BY idbrng DESC") or die(mysqli_error($koneksi));
   while ($result=mysqli_fetch_array($query)) {
    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $result['merk']; ?>
                </td>
                <td>
                    <?php echo $result['tipe']; ?>
                </td>
                <td>
                    <?php echo $result['tahun']; ?>
                </td>
                <td>
                    <button id="EditButton" value="<?php echo $result['idbrng']; ?>" class='btn btn-warning btn-sm'>Edit</button>
                    <button id="DeleteButton" value="<?php echo $result['idbrng']; ?>"class="btn btn-danger btn-sm" >Delete</button>
                </td>
            </tr>
           
            <?php
   }
  ?>

</tbody>
                    <tfoot class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Merek Hp</th>
                            <th>Tipe Hp</th>
                            <th>Tahun Produksi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                
    </tbody>
</table>