<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" href="../assets/icon.png" />
    <link rel="stylesheet" href="Admin.css" />
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1.0"
    />
    <title>Admin Penitipan | Transaction Input</title>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class=" "></i>
        <span class="logo_name">Penitipan Hewan</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="Admin.php" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="categories/Categories.php">
            <i class="bx bx-box"></i>
            <span class="links_name">Categories</span>
          </a>
        </li>
        <li>
          <a href="transaction/Penitipan.php">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Transaction</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log Out</span>
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
        <h3>Input Transaction</h3>
        <div class="form-login">
          <form action="">
            <label for="nama">Nama Hewan</label>
            <input
              class="input"
              type="text"
              name="nama hewan"
              id="nama hewan"
              placeholder="nama hewan"
            />
            <label for="jenis">Biaya Penitipan</label>
            <input
              class="input"
              type="text"
              name="biaya penitipan"
              id="biaya penitipan"
              placeholder="biaya penitipan"
            />
            <label for="harga">Durasi Penitipan</label>
            <input
              class="input"
              type="text"
              name="durasi penitipan"
              id="durasi penitipan"
              placeholder="durasi penitipan"
            />
            <label for="tgl">Tanggal</label>
            <input
              class="input"
              type="date"
              name="tgl"
              id="tgl"
              style="margin-bottom: 20px"
            />
            <button type="submit" class="btn btn-simpan" name="simpan"> Simpan </button>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
