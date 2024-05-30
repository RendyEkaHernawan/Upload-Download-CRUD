<?php 
    include("config.php"); 
    if (isset($_POST['upload'])) { 
        date_default_timezone_set("Asia/Jakarta");

        $tgl = date("Ymd"); 
        // ambil informasi dari file yang diupload 
        $tmp_file = $_FILES['fupload']['tmp_name']; 
        $nm_file = $_FILES['fupload']['name']; 
        $ukuran_file = $_FILES['fupload']['size']; 
        $desc = $_POST['desc']; 
        $size = 10000000; // limit 10 MB 
    
    
        if($ukuran_file > $size) { 
            echo "<strong>Gagal upload! <br>Ukuran Maksimal 10MB, saat ini ukuran file ".$ukuran_file."</strong>"; 
    
            echo "<a href='form_upload.php'>Upload ulang</a>"; 
            exit(); 
    
        } else { 
            if ($nm_file) { 
                $dir = "file/$nm_file"; 
                move_uploaded_file($tmp_file, $dir); 
    
                $sql = "INSERT INTO upload(nama_file, deskripsi, tgl_upload) VALUES ('$nm_file', '$desc', '$tgl')"; 
                $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi)); 
    
                echo "<strong>$nm_file</strong> berhasil di upload!<br>"; 
                echo "<a href='home.php'>Lihat Data</a>"; 
    
            } else { 
                echo "Gagal upload!<br>"; 
                echo "<a href='form_upload.php'>Upload ulang</a>"; 
            }
        }
    }
 ?>