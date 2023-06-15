<!DOCTYPE html>
<html>
<head>
  <title>Formulir Tambah Program </title>
  <style>
    body {
      background-color: #555;
      color: #fff;
      font-family: Arial, sans-serif;
    }
    
    form {
      width: 300px;
      padding: 20px;
      border: 1px solid #000;
      border-radius: 5px;
      margin: 0 auto;
    }
    
    h2 {
      margin-top: 0;
      text-align: center;
    }
    
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    
    input[type=text], input[type=number] {
      width: 280px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      margin-bottom: 10px;
    }
    
    input[type=submit] {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
      width: 100%;
    }
    
    input[type=submit]:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <h2>Formulir Tambah Program</h2>
    <label for="program">Nama Program:</label>
    <input type="text" name="program" id="program" required>
    
    <label for="hari">Hari:</label>
    <input type="text" name="hari" id="hari" required>
    
    <label for="jam">Jam:</label>
    <input type="text" name="jam" id="jam" required>
    
    <label for="harga">Harga:</label>
    <input type="number" name="harga" id="harga" required>
    
    <input type="submit" name="submit" value="Submit">
  </form>
  
  <?php
  include 'koneksi.php';
  // Cek apakah tombol Submit sudah ditekan
  if (isset($_POST['submit'])) {
    // Ambil nilai dari formulir
    $program = $_POST['program'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $harga = $_POST['harga'];

    if (!$connection) {
      die("Koneksi ke database gagal: " . mysqli_connect_error());
    }
    
    // Buat query SQL untuk menyisipkan data ke dalam tabel program
    $query = "INSERT INTO program (nama_program, Hari, Jam, Harga) VALUES ('$program', '$hari', '$jam', $harga)";
    
    // Jalankan query
    if (mysqli_query($connection, $query)) {
      echo "Data berhasil disisipkan ke dalam tabel program.";
      header("Location: program.php");
        exit();
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    
    // Tutup koneksi ke database
    mysqli_close($connection);
  }
  ?>
</body>
</html>