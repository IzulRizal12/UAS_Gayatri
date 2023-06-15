<?php
include 'koneksi.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Validasi input
    if (empty($username)) {
        $errors[] = "Username harus diisi";
    }

    if (empty($password)) {
        $errors[] = "Password harus diisi";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Konfirmasi password tidak sesuai";
    }

    // Jika tidak ada error, lanjutkan proses registrasi
    if (empty($errors)) {
        // Query untuk memeriksa apakah username sudah digunakan
        $checkQuery = "SELECT * FROM akun WHERE username = '$username'";
        $checkResult = mysqli_query($connection, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            $errors[] = "Username sudah digunakan";
        } else {
            // Query untuk menambahkan user baru ke database
            $insertQuery = "INSERT INTO akun (username, password, role) VALUES ('$username', '$password', 'siswa')";
            mysqli_query($connection, $insertQuery);

            // Redirect ke halaman login setelah registrasi berhasil
            header("Location: index.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="index.css">
    <title> Register - Gayatri </title>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="register.php">
                    <h2>Register</h2>
                    <?php
                    if (!empty($errors)) {
                        echo '<div class="error-message">';
                        foreach ($errors as $error) {
                            echo '<p>' . $error . '</p>';
                        }
                        echo '</div>';
                    }
                    ?>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="confirm_password" required>
                        <label for="">Confirm Password</label>
                    </div>
                    <button type="submit">Register</button>
                    <div class="login">
                        <p>Already have an account? <a href="index.php">Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>