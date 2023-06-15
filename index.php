<?php
include 'koneksi.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi input
    if (empty($username)) {
        $errors[] = "Username harus diisi";
    }

    if (empty($password)) {
        $errors[] = "Password harus diisi";
    }

    // Jika tidak ada error, lanjutkan proses login
    if (empty($errors)) {
        // Query untuk memeriksa kecocokan username dan password di database
        $query = "SELECT * FROM akun WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $role = $row['role'];

            if ($role === 'admin') {
                // Redirect ke halaman dashboard.php untuk admin
                header("Location: dashboard.php");
                exit();
            } else {
                // Redirect ke halaman index2.html untuk pengguna lain
                header("Location: home.html");
                exit();
            }
        } else {
            $errors[] = "Username atau password salah";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="login.css">
    <title>Login - Gayatri </title>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="index.php">
                    <h2>Login</h2>
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
                    <button type="submit">Log in</button>
                    <div class="register">
                        <p>Don't have an account? <a href="register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>