<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Daftar Kelas - Bimbingan Belajar GAYATRI</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        .table-container {
            display: flex;
            justify-content: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="index.html">Bimbingan Belajar GAYATRI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="home.html">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="classlist.php">Daftar Kelas</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="home.html#aboutus">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="home.html#callus">Hubungi Kami</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="index.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- section daftar kelas-->
    <section class="bg-white text-primary" style="padding-top: 80px;">
        <div class="container col-md-6 col-sm-12">
            <h2 class="text-center font-alt mb-4">Biaya Bimbingan Belajar Privat</h2>
            <h5 class="text-center font-alt mb-4">(per 10 pertemuan)</h5>
            <div class="table-container text-black text-center">
                <table>
                    <tr>
                        <th><h4>Program<h4></th>
                        <th><h4>Hari</h4></th>
                        <th><h4>Jam</h4></th>
                        <th><h4>Harga</h4></th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $program = mysqli_query($connection, "SELECT * FROM program");
                    foreach ($program as $row) {
                        echo "<tr>
                            <td>" . $row['nama_program'] . "</td>
                            <td>" . $row['Hari'] . "</td>
                            <td>" . $row['Jam'] . "</td>
                            <td>" . $row['Harga'] . "</td>
                        </tr>";
                    }
                    ?>
                </table>
            </div>
            <div class="text-center mt-4">
                <a href="pendaftaran.php" class="btn btn-primary btn-md">Saya Ingin Mendaftar</a>
            </div>
        </div>
    </section>
</body>

</html>

</html>