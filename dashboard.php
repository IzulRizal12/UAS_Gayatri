<?php
include 'koneksi.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gayatri</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="public/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__wobble" src="public/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
				width="60">
		</div>

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-dark">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>

			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Navbar Search -->
				<li class="nav-item">
					<a class="nav-link" data-widget="navbar-search" href="#" role="button">
						<i class="fas fa-search"></i>
					</a>
					<div class="navbar-search-block">
						<form class="form-inline">
							<div class="input-group input-group-sm">
								<input class="form-control form-control-navbar" type="search" placeholder="Search"
									aria-label="Search">
								<div class="input-group-append">
									<button class="btn btn-navbar" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<button class="btn btn-navbar" type="button" data-widget="navbar-search">
										<i class="fas fa-times"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</li>

				<!-- Messages Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-comments"></i>
						<span class="badge badge-danger navbar-badge">3</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img src="public/dist/img/user1-128x128.jpg" alt="User Avatar"
									class="img-size-50 mr-3 img-circle">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Brad Diesel
										<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">Call me whenever you can...</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img src="public/dist/img/user8-128x128.jpg" alt="User Avatar"
									class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										John Pierce
										<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">I got your message bro</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<!-- Message Start -->
							<div class="media">
								<img src="public/dist/img/user3-128x128.jpg" alt="User Avatar"
									class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Nora Silvester
										<span class="float-right text-sm text-warning"><i
												class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">The subject goes here</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							<!-- Message End -->
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
					</div>
				</li>
				<!-- Notifications Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell"></i>
						<span class="badge badge-warning navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">15 Notifications</span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
						<i class="fas fa-th-large"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link text-center">
				<img src="https://www.ruangguru.com/hubfs/OPTIMIZE/logo%20rg.svg" alt="AdminLTE Logo"
					style="height: 30px;">

			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Admin</a>
					</div>
				</div>


				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">

						<li class="nav-item">
							<a href="dashboard.php" class="nav-link">
								<i class="nav-icon fas fa-home"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="submission.php" class="nav-link">
								<i class="nav-icon fas fa-list"></i>
								<p>
									Submission
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="Program.php" class="nav-link">
								<i class="nav-icon fas fa-list"></i>
								<p>
									Program
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-list"></i>
								<p>
									Logout
								</p>
							</a>
						</li>

					</ul>
				</nav>

			</div>

		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Dashboard</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<!-- Info boxes -->
					<div class="row">
						<div class="col-12 col-sm-6 col-md-3">
							<div class="info-box">
								<span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

								<div class="info-box-content">
									<span class="info-box-text"> Total Pendaftar </span>
									
									<span class="info-box-number">
									<?php
                                                    $sql = "SELECT count(nama_lengkap) AS total_pendaftar FROM form_pendaftaran";
                                                    $result = mysqli_query($connection, $sql);
                                                    $row = mysqli_fetch_assoc($result);
                                                    $totalpendaftar = $row['total_pendaftar'];
                                                    ?>
													<?php echo number_format($totalpendaftar); ?>
										<small>orang</small>
									</span>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->
						<div class="col-12 col-sm-6 col-md-3">
							<div class="info-box mb-3">
								<span class="info-box-icon bg-danger elevation-1"><i
										class="fas fa-thumbs-up"></i></span>

								<div class="info-box-content">
									<span class="info-box-text">Total Pendapatan</span>
									<?php
                                                    $sql = "SELECT SUM(program.harga) AS total_pendapatan
													FROM program
													JOIN form_pendaftaran ON program.nama_program = form_pendaftaran.nama_program";
                                                    $result = mysqli_query($connection, $sql);
                                                    $row = mysqli_fetch_assoc($result);
                                                    $totalpendapatan = $row['total_pendapatan'];
                                                    ?>
									<span class="info-box-number"><?php echo number_format($totalpendapatan); ?></span>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->

						<!-- fix for small devices only -->
						<div class="clearfix hidden-md-up"></div>

						<div class="col-12 col-sm-6 col-md-3">
							<div class="info-box mb-3">
								<span class="info-box-icon bg-success elevation-1"><i
										class="fas fa-shopping-cart"></i></span>

								<div class="info-box-content">
									<span class="info-box-text">Program</span>
									<?php
                                                    $sql = "SELECT count(nama_program) AS jumlah_produk FROM program";
                                                    $result = mysqli_query($connection, $sql);
                                                    $row = mysqli_fetch_assoc($result);
                                                    $jumlahproduk = $row['jumlah_produk'];
                                                    ?>
									<span class="info-box-number"><?php echo number_format($jumlahproduk); ?></span>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<!-- /.col -->
						<div class="col-12 col-sm-6 col-md-3">
							<div class="info-box mb-3">
								<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
								<div class="info-box-content">
									<span class="info-box-text">Top Program</span>
									<?php
                                                    $sql = "SELECT form_pendaftaran.nama_program, count(program.nama_program) AS jumlah_pendaftar
													FROM form_pendaftaran
													JOIN program ON form_pendaftaran.nama_program = program.nama_program
													GROUP BY form_pendaftaran.nama_program
													order by jumlah_pendaftar desc
													limit 1;";
                                                    $result = mysqli_query($connection, $sql);
                                                    $row = mysqli_fetch_assoc($result);
                                                    $totalpendaftar = $row['nama_program'];
                                                    ?>
									<span class="info-box-number"><?php echo ($totalpendaftar)?></span>
								</div>
								
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
						</div>
						<div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Jumlah Pendaftar</h3>
                </div>
                <div class="card-body">
                    <canvas id="chart"></canvas>
                </div>
				<?php

    // Query SQL untuk mengambil jumlah pendaftar berdasarkan program
    $query = "SELECT nama_program, COUNT(*) AS jumlah_pendaftar
              FROM form_pendaftaran
              GROUP BY nama_program";
    $result = mysqli_query($connection, $query);

    // Mendapatkan data dari hasil query
    $labels = array();
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $labels[] = $row['nama_program'];
        $data[] = $row['jumlah_pendaftar'];
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // Mendefinisikan data yang akan ditampilkan dalam chart
    var labels = <?php echo json_encode($labels); ?>;
    var data = <?php echo json_encode($data); ?>;

    // Membuat chart menggunakan Chart.js
    var ctx = document.getElementById('chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Jumlah Pendaftar',
                data: data,
                backgroundColor: '#068DA9',
                borderColor: '#068DA9',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // Set this to false
            scales: {
                y: {
                    beginAtZero: true,
                    precision: 0
                }
            },
            plugins: {
                legend: {
                    display: false // Hide the legend
                }
            }
        }
    });
</script>

            </div>
			<div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pendapatan</h3>
                </div>
                <div class="card-body">
                    <canvas id="chart2"></canvas>
                </div>
				<?php

    // Query SQL untuk mengambil jumlah pendaftar berdasarkan program
    $query = "SELECT form_pendaftaran.nama_program, SUM(program.harga) AS total_pendapatan
	FROM form_pendaftaran
	JOIN program ON form_pendaftaran.nama_program = program.nama_program
	GROUP BY form_pendaftaran.nama_program";
    $result = mysqli_query($connection, $query);

    // Mendapatkan data dari hasil query
    $labels = array();
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $labels[] = $row['nama_program'];
        $data[] = $row['total_pendapatan'];
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // Mendefinisikan data yang akan ditampilkan dalam chart
    var labels = <?php echo json_encode($labels); ?>;
    var data = <?php echo json_encode($data); ?>;

    // Membuat chart menggunakan Chart.js
    var ctx = document.getElementById('chart2').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Jumlah Pendaftar',
                data: data,
                backgroundColor: '#D21312',
                borderColor: '#D21312',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // Set this to false
            scales: {
                y: {
                    beginAtZero: true,
                    precision: 0
                }
            },
            plugins: {
                legend: {
                    display: false // Hide the legend
                }
            }
        }
    });
</script>
        </div>
						<!-- /.col -->
					</div>
					<!-- /.row -->

					<!-- /.row -->
				</div><!--/. container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->

		<!-- Main Footer -->
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->
	<!-- jQuery -->
	<script src="public/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="public/dist/js/adminlte.js"></script>

	<!-- PAGE public/PLUGINS -->
	<!-- jQuery Mapael -->
	<script src="public/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
	<script src="public/plugins/raphael/raphael.min.js"></script>
	<script src="public/plugins/jquery-mapael/jquery.mapael.min.js"></script>
	<script src="public/plugins/jquery-mapael/maps/usa_states.min.js"></script>
	<!-- ChartJS -->
	<script src="public/plugins/chart.js/Chart.min.js"></script>

	<!-- AdminLTE for demo purposes -->
	<script src="public/dist/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="public/dist/js/pages/dashboard2.js"></script>
</body>

</html>