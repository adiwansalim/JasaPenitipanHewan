<?php
session_start();
if ($_SESSION['username'] == null) {
	header('location:../../../Login.php');
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="../assets/icon.png" />
	<link rel="stylesheet" href="../Admin.css" />
	<!-- Boxicons CDN Link -->
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Admin Penitipan | Input Kategori</title>
</head>

<body>
	<div class="sidebar">
		<div class="logo-details">
			<i class="bx bx-category"></i>
			<span class="logo_name">Penitipan Hewan</span>
		</div>
		<ul class="nav-links">
			<li>
				<a href="../Admin.php" class="active">
					<i class="bx bx-grid-alt"></i>
					<span class="links_name">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="../categories/Categories.php">
					<i class="bx bx-box"></i>
					<span class="links_name">Categories</span>
				</a>
			</li>
			<li>
				<a href="../transaction/Penitipan.php">
					<i class="bx bx-list-ul"></i>
					<span class="links_name">Transaction</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="bx bx-log-out"></i>
					<span class="links_name">Log out</span>
				</a>
			</li>
		</ul>
	</div>
	<section class="home-section">
		<nav>
			<div class="sidebar-button">
				<i class="bx bx-menu sidebarBtn"></i>
			</div>
			<div class="profile-details">
				<span class="admin_name">Admin Penitipan</span>
			</div>
		</nav>
		<div class="home-content">
			<h3>Input Kategori Hewan</h3>
			<div class="form-login">
				<form action="../categories/categories-proses.php" method="post" enctype="multipart/form-data">
					<label for="kategorihewan">Kategori Hewan</label>
					<input class="input" type="text" name="kategorihewan" id="kategorihewan" placeholder="kategori hewan" />
					<label for="kategorihwan">Harga</label>
					<input class="input" type="text" name="harga" id="harga" placeholder="harga" />
					<label for="kategorihewan">Deskripsi Hewan</label>
					<input class="input" type="text" name="deskripsihewan" id="deskripsihewan" placeholder="deskripsi hewan" />
					<label for="fotohewan">Foto Hewan</label>
					<!-- <label for="fotohewan">Foto Hewan</label> -->
					<input type="file" name="fotohewan" id="fotohewan" style="margin-bottom: 20px" />
					<button type="submit" class="btn btn-simpan" name="simpan">
						Simpan
					</button>
				</form>
			</div>
		</div>
	</section>
	<script>
		let sidebar = document.querySelector(".sidebar");
		let sidebarBtn = document.querySelector(".sidebarBtn");
		sidebarBtn.onclick = function() {
			sidebar.classList.toggle("active");
			if (sidebar.classList.contains("active")) {
				sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
		};
	</script>
</body>

</html>