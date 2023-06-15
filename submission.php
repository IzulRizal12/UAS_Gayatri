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
	<!-- DataTables -->
	<link rel="stylesheet" href="public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
							<h1 class="m-0">Submission</h1>
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
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Data Submission</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Nama</th>
												<th>Jenis Kelamin</th>
												<th>Email</th>
												<th>Phone Number</th>
												<th>Nama_program</th>
												<th>Hari</th>
												<th>Jam</th>
												<th>Harga</th>
											</tr>
										</thead>
										<tbody>
											<?php
										// Connect to the database
										$conn = mysqli_connect("localhost", "root", "", "gayatri");
							
										// Check connection
										if (!$conn) {
											die("Connection failed: " . mysqli_connect_error());
										}
							
										// Fetch data from the database
										$sql = "SELECT nama_lengkap, jenis_kelamin, email, nomor_telepon, program.*
										FROM gayatri.form_pendaftaran
										JOIN program ON program.nama_program = form_pendaftaran.nama_program;";
										$result = mysqli_query($conn, $sql);
							
										if (mysqli_num_rows($result) > 0) {
											while ($row = mysqli_fetch_assoc($result)) {
												echo "<tr>";
												echo "<td>" . $row['nama_lengkap'] . "</td>";
												echo "<td>" . $row['jenis_kelamin'] . "</td>";
												echo "<td>" . $row['email'] . "</td>";
												echo "<td>" . $row['nomor_telepon'] . "</td>";
												echo "<td>" . $row['nama_program'] . "</td>";
												echo "<td>" . $row['Hari'] . "</td>";
												echo "<td>" . $row['Jam'] . "</td>";
												echo "<td>" . $row['Harga'] . "</td>";
												echo "</tr>";
											}
										} else {
											echo "<tr><td colspan='6'>No records found</td></tr>";
										}
							
										// Close the database connection
										mysqli_close($conn);
										?>
										</tbody>
									</table>
								</div>
								<!-- /.card-body -->
							</div>
						</div>
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
		<footer class="main-footer">
			<P>HEHE</P>
		</footer>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->
	<!-- jQuery -->


	<!-- jQuery -->
	<script src="public/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- DataTables  & Plugins -->
	<script src="public/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="public/plugins/jszip/jszip.min.js"></script>
	<script src="public/plugins/pdfmake/pdfmake.min.js"></script>
	<script src="public/plugins/pdfmake/vfs_fonts.js"></script>
	<script src="public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
	<!-- AdminLTE App -->
	<script src="public/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="public/dist/js/demo.js"></script>
	<!-- Page specific script -->
	<script>
		$(function () {
			$("#example1").DataTable({
				"responsive": true, "lengthChange": false, "autoWidth": false,
				"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
			}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
			});
			$.ajaxSetup({
				header: {

					'Content-Type': 'application/json',

				}
			});
			$.ajax({
				method: 'GET',
				url: 'https://us-central1-silicon-airlock-153323.cloudfunctions.net/rg-package-dummy',
				data: { 'userId': 'anugrahaman71' },
				success: function (result) {

					console.log(result);
					let dataKota;

					dataKota += '<option selected disabled>Pilih Kota/Kabupaten</option>';
					$.each(result.data, function (key, data) {
						dataKota += '<option value="' + data.id_kota + '">' + data.nama_kota + '</option>';
					});
					$('#kota_ktp').html(dataKota);
				}
			});
		});
	</script>
</body>

</html>