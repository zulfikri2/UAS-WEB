<?php

// servis.php  untuk menangani proses simpan, edit dan hapus data oleh pengguna
include "koneksi.php";

switch ($_GET['action'])
{

    case 'save':

        $merk = $_POST['merk'];
        $tipe = $_POST['tipe'];
        $tahun = $_POST['tahun'];
       
        $query = mysqli_query($koneksi, "INSERT INTO dat(merk, tipe, tahun) VALUES('$merk', '$tipe', '$tahun')");
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'edit':

        $idbrng = $_POST['idbrng'];
        $merk = $_POST['merk'];
        $tipe = $_POST['tipe'];
        $tahun = $_POST['tahun'];

        $query = mysqli_query($koneksi, "UPDATE dat SET merk='$merk', tipe='$tipe', tahun='$tahun' WHERE idbrng='$idbrng'");
        if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'delete':

        $idbrng = $_POST['idbrng'];
        $query = mysqli_query($koneksi, "DELETE FROM dat WHERE idbrng='$idbrng'");
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($koneksi);
        }
    break;
}
?>