<?php
// Memanggil file koneksi database
require '../dbkoneksi.php';

// Memeriksa apakah parameter id telah diterima dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data terkait di tabel 'periksa' yang merujuk ke dokter yang akan dihapus
    $sql_delete_periksa = "DELETE FROM periksa WHERE dokter_id = ?";
    $stmt_delete_periksa = $dbh->prepare($sql_delete_periksa);
    $stmt_delete_periksa->execute([$id]);

    // Setelah data terkait di tabel 'periksa' dihapus, baru hapus data dokter dari tabel 'dokter'
    $sql_delete_dokter = "DELETE FROM dokter WHERE id = ?";
    $stmt_delete_dokter = $dbh->prepare($sql_delete_dokter);
    $stmt_delete_dokter->execute([$id]);

    // Redirect ke halaman index.php setelah proses penghapusan selesai
    header("Location: index.php");
    exit();
} else {
    echo "Parameter ID tidak ditemukan.";
    exit;
}
?>
