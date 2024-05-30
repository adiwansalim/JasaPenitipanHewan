<!-- WIDGATE -->
<?php
include '../koneksi.php';

// Query to get the number of data in the "kategori_hewan" table
$sql = "SELECT * FROM tb_kategorihewan";
// $result = $conn->query($sql);

$sql = "SELECT * FROM tb_kategorihewan";
					$result = mysqli_query($koneksi, $sql);
					if (mysqli_num_rows($result) == 0) {
						echo "
						<h3 style='text-align: center; color: red;'>Data Kosong</h3>
				";
					}

 else {
    $totalData = 0;
}

// Close the database connection
// $conn->close();
?>

<!-- Widget to display the number of data -->
<div class="widget">
    <h3>Total Data in Kategori Hewan</h3>
    <p><?php echo $totalData; ?></p>
</div>
