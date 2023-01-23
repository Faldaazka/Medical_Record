<table border="1" align="center" width="100%">
    
    <tr bgcolor="blue">
        <th>Nama Dokter</th>
        <th>Hari</th>
        <th>Shift</th>
        <th>Departemen</th>
        <th>Keterangan</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "database/koneksi.php";

    $ambildata = mysqli_query($connect,"select * from jadwal_dokter");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$tampil[dokter_nama]</td>
            <td>$tampil[dokter_hari]</td>
            <td>$tampil[dokter_waktu_shift]</td>
            <td>$tampil[dokter_departemen]</td>
            <td>$tampil[dokter_keterangan]</td>
        </tr>";
    }
    ?>
    </table>