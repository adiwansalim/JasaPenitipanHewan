<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="assets/icon.png" />
    <title>Categori</title>
    <link rel="stylesheet" href="Style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>
  <body>
    <div class="container">
      <header>
        <nav>
          <div class="logo">
            <img src="assets/logo.png" alt="" width="150" height="80" />
          </div>
          <input type="checkbox" id="click" />
          <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
          </label>
          <ul>
            <li><a href="Index.php">Home</a></li>
            <li><a href="#">Categories</a></li>
            <li><a href="login.php" class="btn_login">Login</a></li>
          </ul>
        </nav>
      </header>
      <main>
        <div class="cards-categories">
          <h2>Kategori Penitipan Hewan</h2>
          <div class="card-categories">
            <div class="card">
              <img src="assets/HewanKecil.png" alt="" width="300" height="100" />
              <h5>Penitipan Hewan Kecil : </h5>
              <p>
                Hamster <br> Kelinci <br>Burung <br> Ikan <br> Hewan pengerat kecil lainnya.
              </p>
            </div>
            <div class="card">
              <img src="assets/HewanBesar.png" alt="" width="300" height="100" />
              <h5>Penitipan Hewan Besar : </h5>
              <p>
                Anjing <br> Kucing <br> Hewan besar lainnya (kuda, domba, dll.).
              </p>
            </div>
            <div class="card">
              <img src="assets/HewanEksotis.png" alt="" width="300" height="100" />
              <h5>Penitipan Hewan Eksotis: </h5>
              <p>
                Ular <br> Kadal <br> Kura-kura <br> Burung eksotis <br> Mamalia eksotis (landak,dll.).
              </p>
            </div>
            <div class="card">
              <img src="assets/kategori-lainnya.png" alt="" />
              <h5>Kategori Lainnya..</h5>
              <p>
                Deskripsi kategori lainnya di sini.
              </p>
            </div>
          </div>
        </div>
        <footer>
          <h4>Jasa Penitipan Hewan</h4>
        </footer>
    </div>
  </body>
</html>