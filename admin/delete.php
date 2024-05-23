<?php
include 'function.php';
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    
    if ($id > 0) {
        // Siapkan dan jalankan pernyataan SQL untuk menghapus data
        $sql = "DELETE FROM table_pendaftaran WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
    
        if ($stmt->execute()) {
            // Jika berhasil, arahkan ke halaman yang diinginkan (misalnya, halaman utama atau daftar)
            header("Location: datapendaftar.php");
        } else {
            // Jika gagal, tampilkan pesan kesalahan
            echo "Error: " . $conn->error;
        }
    
        $stmt->close();
    } else {
        echo "ID tidak valid.";
    }
?>