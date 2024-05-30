<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'categories.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_kategorihewan WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

	session_start();
	if($_SESSION['username'] == null) {
		header('location:../../../Login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <link rel="stylesheet" href="../Admin.css" />
   <!-- Boxicons CDN Link -->
   <link
	href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
			rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Admin Penitipan | Input Kategori</title>
</head>
<body>
   <div class="sidebar">
	<div class="logo-details">
	   <i class="bx bx-category"></i>
	   <span class="logo_name">PENITIPAN</span>
	</div>
	<ul class="nav-links">
	   <li>
		<a href="../Admin.php">
		   <i class="bx bx-grid-alt"></i>
		   <span class="links_name">Dashboard</span>
		</a>
	   </li>
	   <li>
		<a href="../categories/Categories.php" class="active">
		   <i class="bx bx-box"></i>
		   <span class="links_name">Kategori Hewan</span>
		</a>
	   </li>
	   <li>
		<a href="../transaction/Penitipan.php">
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
	   <h3>Hapus Kategori</h3>
         <div class="form-login">
            <h4>Ingin Menghapus Data ?</h4>
            <form
              action="../categories/categories-proses.php"
              method="post"
              enctype="multipart/form-data"
            >
              <input type="hidden" name="id" value="<?= $data['id'] ?>">
              <button type="submit" class="btn" name="hapus" style="margin-top: 50px;">
			Yes
		  </button>
		  <button type="submit" class="btn" name="tidak">
			No
		  </button>
            </form>
          </div>
	</div>
   </section>
   <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
	sidebarBtn.onclick = function () {
	   sidebar.classList.toggle("active");
	   if (sidebar.classList.contains("active")) {
		sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
	   } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
	   };
   </script>
</body>
</html>
