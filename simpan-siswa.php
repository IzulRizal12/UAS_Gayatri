<?php

//include koneksi database
include('koneksi.php');

    //get data dari form
    $nama_lengkap = $_POST['nama_lengkap'];
    $Email = $_POST['Email'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $pilihan_program = $_POST['pilihan_program'];
    $pilihan_jkel = $_POST['pilihan_jkel'];

    //query insert data ke dalam database
    $query = "INSERT INTO form_pendaftaran (nama_lengkap, jenis_kelamin, Email, nomor_telepon, nama_program)
     VALUES ('$nama_lengkap', '$pilihan_jkel', '$Email', '$nomor_telepon', '$pilihan_program')";

    $success = mysqli_query($connection, $query);
    //kondisi pengecekan apakah data berhasil dimasukkan atau tidak
    if($success) {

        //redirect ke halaman index.php 
        header("location: home.html");

    } else {

        //pesan error gagal insert data
        echo "Data Gagal Disimpan!";

    }


?>