<?php 
    include("config.php"); 
    
    // Fungsi PHP untuk menghapus file 
    $path = "file/"; 
    $id_file = isset($_GET['id_file']) ? intval($_GET['id_file']) : 0;
    $file_name = isset($_GET['file_name']) ? $_GET['file_name'] : '';

    if ($id_file > 0 && !empty($file_name)) {
        // Hapus data dari tabel 
        $query = "DELETE FROM upload WHERE id = $id_file"; 
        $result = mysqli_query($koneksi, $query); 
    
        if ($result) { 
            // Hapus file dari direktori 
            $file_path = $path . $file_name;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
            header("Location: home.php"); 
        } else { 
            die("Gagal menghapus data: " . mysqli_error($koneksi)); 
        }
    } else {
        die("Invalid file id or filename");
    }
?>
