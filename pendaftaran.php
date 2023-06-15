<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pendaftaran - Bimbingan Belajar GROW</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
	</head>
	<body>
		<!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="home.html">Bimbingan Belajar Gayatri</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="home.html">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="classlist.html">Daftar Kelas</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="home.html#aboutus">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="home.html#callus">Hubungi Kami</a></li>
						<li class="nav-item"><a class="nav-link me-lg-3" href="index.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--section form pendaftaran-->
        <section class="bg-white text-primary">
        	<h2 class="text-center font-alt mb-4">FORM PENDAFTARAN</h2>
        	<div class="form-row">
            <form class="form_pendaftaran" action="simpan-siswa.php" method="POST">
        		<div class="col-sm-7">
        			<label for="nama_lengkap" class="form-label">Nama Lengkap</label>
        			<input type="text" class="form-control" name="nama_lengkap" id="namalengkap" placeholder="" value="" required="">
        			<div class="invalid-feedback">nama diperlukan</div>
        		</div>
				<div class="col-sm-7">
					<label for="pilihan_jkel" class="form-label">Jenis Kelamin:</label>
        				<select class="form-select" name="pilihan_jkel" id="jenis_kelamin">
							<option value="">Harus dipilih</option>
            				<option value="Laki-laki">Laki-laki</option>
            				<option value="Perempuan">Perempuan</option>
        				</select>
				</div>
        		<div class="col-sm-7">
        			<label for="email" class="form-label">Email</label>
        			<input type="email" class="form-control" name="Email" id="email" placeholder="you@example.com">
        			<div class="invalid-feedback">email diperlukan</div>
        		</div>
        		<div class="col-sm-7">
        			<label for="nomor_telepon" class="form-label">Nomor Handphone</label>
        			<input type="text" class="form-control" name="nomor_telepon" id="phone" placeholder="" value="" required="">
        			<div class="invalid-feedback">nomor handphone diperlukan</div>
        		</div>
        		<div class="col-sm-7">
        			<label for="pilihan_program" class="form-label">Pilihan Pogram</label>
        			<select class="form-select" name="pilihan_program" id="pilihanprogram" required="">
					<option value="">Harus dipilih</option>
						<?php
							$query = "SELECT DISTINCT nama_program FROM program";
							$result = mysqli_query($connection, $query);
            				while ($row = mysqli_fetch_assoc($result)) {
                			echo "<option value='" . $row['nama_program'] . "'>" . $row['nama_program'] . "</option>";
            				}
            			?>
              		</select>
              		<div class="invalid-feedback">harus dipilih</div>
					  <button type="submit" class="btn btn-success">SUBMIT</button>
        		</div>
        		</div>
                </form>
        	</div>
        </section>
	</body>
</html>