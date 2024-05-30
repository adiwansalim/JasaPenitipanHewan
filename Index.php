<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="assets/icon.png" />
    <title>Home</title>

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
  <div class="carousel"></div>
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
            <li><a href="Categoriii.php">Categories</a></li>
            <li><a href="login.php" class="btn_login">Login</a></li>
          </ul>
        </nav>
      </header>
      <main>
        <div class="jumbotron">
          <div class="jumbotron-text">
            <h3>Titipkan Hewan Peliharaan Kesayangan Anda Bersama kami Dengan Cinta yang Sama</h3>
            <p>Jangan khawatir, hewan peliharaan anda akan kami jaga dengan baik dan penuh kasih sayang.</p>
          </div>
          <div class="jumbotron-img">
            <img src="assets/logo.png" alt="" width="150" height="80" />
          </div>
        </div>
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
        <div class="cards-services">

          <h2>Layanan Penitipan Hewan</h2>
          <div class="card-services">
            <div class="card">
              <img src="assets/HewanKecil.png" alt="" />
              <h5>Penitipan Hewan Kecil</h5>
              <p>Penitipan hewan peliharaan anda dengan fasilitas yang nyaman dan aman.</p>
              <button onclick="bukaModal('Penitipan Hewan Kecil')" style="background-color: #069cc9; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Pesan Sekarang</button>
            </div>
            <div class="card">
              <img src="assets/HewanEksotis.png" alt="" />
              <h5>Penitipan Hewan Eksotis</h5>
              <p>
                Penitipan hewan eksotis anda dengan fasilitas yang nyaman dan aman.
              </p>
              <button onclick="bukaModal('Penitipan Hewan Eksotis')" style="background-color: #069cc9; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Pesan Sekarang</button>
            </div>
            <div class="card">
              <img src="assets/HewanBesar.png" alt="" />
              <h5>Penitipan Hewan Besar</h5>
              <p> Penitipan hewan besar anda dengan fasilitas yang nyaman dan aman.</p>
              <button onclick="bukaModal('Penitipan Hewan Besar')" style="background-color: #069cc9; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Pesan Sekarang</button>
            </div>
            <div class="card">
              <img src="assets/logo.png" alt="" />
              <h5>Layanan Lainnya..</h5>
              <p>
                Deskripsi layanan lainnya di sini.
              </p>
              <button onclick="bukaModal('Layanan Lainnya')" style="background-color: #069cc9; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">Pesan Sekarang</button>
            </div>
          </div>
        </div>
      </main>

        <!-- Modal -->
        <div id="myModal" class="modal-container" onclick="tutupModal()">
          <div class="modal-dialog" onclick="event.stopPropagation()">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" style="color: #0aafd8;">Pemesanan Penitipan Hewan</h1>
                <button type="button" class="btn-close" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label class="labelmodal" for="recipient-name" class="col-form-label">Nama :</label>
                    <input class="inputdata" type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label class="labelmodal" for="handphone" class="col-form-label">No. Hp :</label>
                    <input class="inputdata" type="text" class="form-control" id="handphone">
                  </div>
                  <div class="form-group ">
                    <label class="labelmodal" for="alamat-text" class="col-form-label">Alamat:</label>
                    <textarea class="inputalamat" class="form-control" id="alamat-text"></textarea>
                  </div>
                  <div class="form-group">
                    <label class="labelmodal" for="jenis-hewan" class="col-form-label">Jenis Hewan:</label>
                    <input class="inputdata" type="text" class="form-control" id="jenis-hewan">
                  </div>
                </form>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="tutupModal()">Keluar</button>
                <button type="button" class="btn btn-biru" onclick="bukaModal2()">Lanjutkan</button>
              </div>
            </div>
          </div>
        </div>

      <!-- Modal 2 -->
      <div id="myModal2" class="modal-container" onclick="tutupModal2()"></div>
        <div class="modal-dialog" onclick="event.stopPropagation()">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" style="color:  #0aafd8;">Pembayaran Jasa Penitipan Hewan</h3>
              <button type="button" class="btn-close" aria-label="Close" onclick="tutupModal2()"></button>
            </div>
            <div class="modal-body">
              <form>
                <h4 style="color: #069cc9;">Kategori</h4>
                <div class="form-group">
                  <label class="labelmodal" for="detail-jenisHewan" class="col-form-label">Jenis Hewan:</label>
                  <input class="inputdata" type="text" class="form-control" id="detail-jenisHewan" enable>
                </div>
                <div class="form-group">
                  <label class="labelmodal" for="detail-kategori" class="col-form-label">Kategori:</label>
                  <input class="inputdata" type="text" class="form-control" id="detail-kategori" enable>
                </div>
                <div class="form-group">
                  <label class="labelmodal" for="detail-harga" class="col-form-label">Harga :</label>
                  <input class="inputdata" type="text" class="form-control" id="detail-harga" enable>
                </div>
                <h4 style="color: #069cc9;">Pemesan</h4>
                <div class="form-group">
                  <label class="labelmodal" for="detail-nama" class="col-form-label">Nama :</label>
                  <input class="inputdata" type="text" class="form-control" id="detail-nama" enable>
                </div>
                <div class="form-group">
                  <label class="labelmodal" for="detail-nomorhp" class="col-form-label">No. Hp :</label>
                  <input class="inputdata" type="text" class="form-control" id="detail-nomorhp" enable>
                </div>
                <div class="form-group">
                  <label class="labelmodal" for="detail-alamat" class="col-form-label">Alamat:</label>
                  <textarea class="inputalamat" class="form-control" id="detail-alamat" enable></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="kembaliKeModalPertama()">Kembali</button>
              <button type="button" class="btn btn-biru" onclick="lanjutkanPembayaran()">Lanjutkan Pembayaran</button>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
</div>
        <footer>
          <h4> <img src="assets/logo.png" alt="" width="60" height="60"> Jasa Penitipan Hewan</h4>
        </footer>
    </div>
    <script>
      // Fungsi Modal
      function bukaModal(kategori) {
        document.getElementById("myModal").style.display = "flex";
  
        document.getElementById("kategori-detail").innerText = "Detail " + kategori;
  
        document.getElementById("nama").value = "";
        document.getElementById("nomorhp").value = "";
        document.getElementById("alamat").value = "";
        document.getElementById("jenisHewan").value = "";
      }
  
      function tutupModal() {
        document.getElementById("myModal").style.display = "none";
      }
  
      function tutupModal2() {
        document.getElementById("myModal2").style.display = "none";
      }
      function bukaModal2() {
        tutupModal(); // Tutup modal pertama
        document.getElementById("myModal2").style.display = "flex";
  
        var nama = document.getElementById("recipient-name").value;
        var nomorhp = document.getElementById("handphone").value;
        var alamat = document.getElementById("alamat-text").value;
        var jenisHewan = document.getElementById("jenisHewan-text").value;
  
        document.getElementById("detail-nama").value = nama;
        document.getElementById("detail-nomorhp").value = nomorhp;
        document.getElementById("detail-alamat").value = alamat;
        document.getElementById("detail-jenisHewan").value = jenisHewan;
      }
      function kembaliKeModalPertama() {
        tutupModal2();
        bukaModal();
      }
      function lanjutkanPembayaran() {
        alert("Pembayaran Pemesanan Penitipan Hewan Anda berhasil!");
        tutupModal2();
      }
      function lanjutkanPembayaran() {
        alert("Pembayaran Pemesanan Penitipan Hewan Anda berhasil!");
        tutupModal2();
      }
    </script>
    
  </body>
</html>