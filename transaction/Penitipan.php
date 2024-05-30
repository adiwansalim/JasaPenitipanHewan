<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" href="../assets/logo.png" />
    <link rel="stylesheet" href="../Admin.css" />
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1.0"
    />
    <title>Admin Penitipan | Transaction</title>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class=" "></i>
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
        <h3>Trasaction</h3>
        <button type="button" class="btn btn-tambah">
          <a href="../InputPenitipan.php">Tambah Data</a>
        </button>
        <table class="table-data">
          <thead>
            <tr>
              <th style="width: 20%">Nama Hewan</th>
              <th>Tanggal Penitipan</th>
              <th style="width: 20%">Biaya Penitipan</th>
              <th style="width: 20%">Durasi Penitipan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Kuda</td>
              <td>02/04/2024</td>
              <td>Rp.150.000</td>
              <td>5 hari</td>
          <td>
          <a href="" class="btn-edit">Edit</a>
          <a href="" class="btn-hapus">Hapus</a>
          </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </body>
</html>
