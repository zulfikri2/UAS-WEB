<?php
 include "koneksi.php";
 $idbrng=$_GET['idbrng'];
 $query=mysqli_query($koneksi, "SELECT * FROM dat WHERE idbrng='$idbrng'") or die(mysqli_error($koneksi));
 $result=mysqli_fetch_array($query);
?>
    <form method="POST" id="formEdit">
        <table>
            <tr>
                <td>Merk Hp</td>
                <td>
                    <input type="hidden" name="idbrng" id="idbrng" required="" value="<?php echo $result['idbrng']; ?>" />
                    <input type="text" name="merk" id="merk" required="" value="<?php echo $result['merk']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Tipe Hp</td>
                <td>
                    <input type="text" name="tipe" id="tipe" required="" value="<?php echo $result['tipe']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Tahun Produksi</td>
                <td>
                    <input type="text" name="tahun" id="tahun" required="" value="<?php echo $result['tahun']; ?>" />
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" id="simpan" value="Simpan" />
                    <button type="button" id="cancelButton">Batal</button>
                </td>
            </tr>
        </table>
    </form>