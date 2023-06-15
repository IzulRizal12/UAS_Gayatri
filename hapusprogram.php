<?php
include 'koneksi.php';

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the 'nama' parameter is provided
if (isset($_GET['nama_program'])) {
    // Get the value of 'nama' parameter
    $nama = $_GET['nama_program'];

    // Prepare and execute the delete query
    $sql = "DELETE FROM program WHERE nama_program = '$nama'";
    if (mysqli_query($connection, $sql)) {
        echo "Baris berhasil dihapus.";
        header("Location: program.php");
    } else {
        echo "Terjadi kesalahan saat menghapus baris: " . mysqli_error($conn);
    }
} else {
    echo "Nama program tidak diberikan.";
}

// Close the database connection
mysqli_close($connection);
?>