<?php
include '../koneksi.php';

function upload()
{
    $namaFile = $_FILES['fotohewan']['name'];
    $error = $_FILES['fotohewan']['error'];
    $tmpName = $_FILES['fotohewan']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "
            <script>
                alert('Gambar Harus Diisi');
                window.location = '../categories/CategoriesInput.php';
            </script>
        ";

        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstentiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstentiGambarValid)) {
        echo "
            <script>
                alert('File Harus Berupa Gambar');
                window.location = '../categories/CategoriesInput.php';
            </script>
        ";

        return null;
    }

    // lolos pengecekan, upload gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    $oke =  move_uploaded_file($tmpName, '../img_categories/' . $namaFileBaru);
    return $namaFileBaru;
}

if (isset($_POST['simpan'])) {
    $kategorihewan = $_POST['kategorihewan'];
    $harga = $_POST['harga'];
    $deskripsihewan = $_POST['deskripsihewan'];
    $fotohewan = upload();

    if (!$fotohewan) {
        return false;
    }
    // var_dump($fotohewan, $kategorihewan, $harga, $deskripsihewan);

    $sql = "INSERT INTO tb_kategorihewan VALUES(NULL, '$fotohewan', '$kategorihewan', '$harga','$deskripsihewan')";
    // var_dump($sql);
    // die();
    if (empty($kategorihewan) || empty($harga) || empty($deskripsihewan)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = '../categories/CategoriesInput.php';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Ditambahkan');
                window.location = '../categories/Categories.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = '../categories/CategoriesInput.php'
            </script>
        ";
    }
} elseif (isset($_POST['edit'])) {
    $id         = $_POST['id'];
    $kategorihewan = $_POST['kategorihewan'];
    $harga      = $_POST['harga'];
    $deskripsihewan = $_POST['deskripsihewan'];
    $fotoLama = $_POST['fotoLama'];

    // cek apakah user pilih gambar atau tidak
    if ($_FILES['fotohewan']['error']) {
        $fotohewan = $fotoLama;
    } else {
        // foto lama akan dihapus dan diganti foto baru
        unlink('../img_categories/' . $fotoLama);
        $fotohewan = upload();
    }

    $sql = "UPDATE tb_kategorihewan SET 
            fotohewan = '$fotohewan',
            kategorihewan = '$kategorihewan',
            harga = '$harga',
            deskripsihewan = '$deskripsihewan'
            WHERE id = $id 
            ";

    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Diubah');
                window.location = '../categories/Categories.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = '../categories/categories-edit.php';
            </script>
        ";
    }
} elseif (isset($_POST['hapus'])) {
    $id = $_POST['id'];

    // hapus gambar
    $sql = "SELECT * FROM tb_kategorihewan WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    $fotohewan = $row['fotohewan'];
    unlink('../img_categories/' . $fotohewan);


    $sql = "DELETE FROM tb_kategorihewan WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Dihapus');
                window.location = '../categories/Categories.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Categories Gagal Dihapus');
                window.location = '../categories/Categories.php';
            </script>
        ";
    }
} else {
    header('location:../../CategoriesInput.php');
}
