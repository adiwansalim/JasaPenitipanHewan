<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <link rel="stylesheet" href="../Admin.css" />
   <!-- Boxicons CDN Link -->
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Catshop Admin | Transaction</title>
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
         <h3>Transaksi Penitipan</h3>
         
         <table class="table-data">
            <thead>
               <tr>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Status</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
               include '../koneksi.php';
               $sql = "SELECT * FROM tb_transaksipenitipan";
               $result = mysqli_query($koneksi, $sql);
               if (mysqli_num_rows($result) == 0) {
                  echo "
                  <h3 style='text-align: center; color: red;'>Data Kosong</h3>
               ";
               } else {
                  while ($data = mysqli_fetch_assoc($result)) {
                     echo "
                     <tr>
                         <td>$data[tanggal]</td>
                         <td>$data[nama]</td>
                         <td>$data[jenis]</td>
                         <td>$data[harga]</td>
                         <td><p class='success'>$data[status]</p></td>
                         <td style='display: none;'>$data[nomorhp]</td>
                         <td>
                         <button class='btn_detail' data-nomorhp='$data[nomorhp]' onclick='showDetails(\"$data[tanggal]\", \"$data[nama]\", \"$data[jenis]\", \"$data[harga]\", \"$data[status]\")'>Detail</button>
                         </td>
                     </tr>
                     ";
                  }
               }
               ?>
            </tbody>
         </table>
         <!-- <button class="btn_tambah" onclick="window.location.href='transaction-tambah.php'">Tambah</button> -->
         <div class="btn_cetak">
         <button onclick="window.location.href='../transaction/Transaksi-Cetak.php'">Cetak</button>
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

      function showDetails(tanggal, nama, kategori, harga, status) {
         let nomorhp = event.target.getAttribute('data-nomorhp');
         alert(`Tanggal: ${tanggal}\nNama: ${nama}\nKategori: ${kategori}\nHarga: ${harga}\nNomor HP: ${nomorhp}\nStatus: ${status}`);
      }
   </script>


</body>

</html>
