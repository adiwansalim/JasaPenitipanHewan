<?php
session_start();
if ($_SESSION['username'] == null) {
	header('location: ../../../Login.php');
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
	<title>Admin Penitipan | Kategori Hewan</title>
</head>

<body>
	<div class="sidebar">
		<div class="logo-details">
			<i class="bx bx-category"></i>
			<span class="logo_name">PENITIPAN</span>
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
					<span class="links_name">Kategori Hewan</span>
				</a>
			</li>
			<li>
				<a href="../transaction/Transaksi_Penitipan.php">
					<i class="bx bx-list-ul"></i>
					<span class="links_name">Transaksi Penitipan</span>
				</a>
			</li>
			<li>
				<a href="../Logout.php">
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
			<h3>Kategori Hewan</h3>
			<button type="button" class="btn btn-tambah">
				<a href="../categories/CategoriesInput.php">Tambah Data</a>
			</button>
			<table class="table-data">
				<thead>
					<tr>
						<th scope="col" style="width: 20%">Foto Hewan</th>
						<th>Kategori Hewan</th>
						<th scope="col" style="width: 30%">Deskripsi Hewan</th>
						<th scope="col" style="width: 15%">Harga</th>
						<th scope="col" style="width: 20%">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include '../koneksi.php';
					$sql = "SELECT * FROM tb_kategorihewan";
					$result = mysqli_query($koneksi, $sql);
					if (mysqli_num_rows($result) == 0) {
						echo "
			   <tr>
				<td colspan='5' align='center'>
                           Data Kosong
                        </td>
			   </tr>
				";
					}
					while ($data = mysqli_fetch_assoc($result)) {
						echo "
                    <tr>
                      <td>
                        <img src='../img_categories/$data[fotohewan]' width='200px'>
                      </td>
                      <td>$data[kategorihewan]</td>
					  <td>$data[deskripsihewan]</td>
                      <td>$data[harga]</td>
					  <td >
						<a class='btn-edit'href=../categories/categories-edit.php?id=$data[id]>
								Edit 
						</a> | |
						 <a class='btn-hapus'href=../categories/categories-hapus.php?id=$data[id]>
								Hapus
						</a>
					 </td>
                    </tr>
                  ";
					}
					?>
				</tbody>
			</table>
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