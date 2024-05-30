<?php 
    include ('config.php'); 
    $sql = 'SELECT * FROM upload ORDER BY id DESC'; 
    $result = mysqli_query($koneksi, $sql); 
    
    
    if (!$result) { 
        die('Could not get data: ' . mysqli_error($koneksi)); 
    } 
    echo "<p><h1>Data File</h1></p>"; 
    echo "<p><a href='form_upload.php'>Tambah Data</a></p>"; 
    echo "<table width = '850' border='1'> 
        <tr> 
            <td>No</td> 
            <td>Nama File</td> 
            <td>Deskripsi</td> 
            <td>Tanggal Upload</td> 
            <td colspan='2'>Aksi</td> 
        </tr>"; 
    
    
    $i = 1; 
    while ($row = mysqli_fetch_assoc($result)) { 
        echo "<tr>";
        echo "<td> $i </td>"; 
        echo "<td> {$row['nama_file']} </td>"; 
        echo "<td> {$row['deskripsi']} </td>"; 
        echo "<td> {$row['tgl_upload']} </td>";

        echo "<td> <a href='download.php?file_name={$row['nama_file']}'> Download </a></td>";

        echo "<td> <a href='delete.php?file_name={$row['nama_file']}&id_file={$row['id']}'> Delete </a></td>";
        
        echo "</tr>"; 
        $i++; 
    }

    echo "</table>"; 
    mysqli_close($koneksi);
?>