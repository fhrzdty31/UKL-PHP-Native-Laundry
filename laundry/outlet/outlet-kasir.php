<div class="halaman">
	<center>
        <h5 class="role">Login sebagai : <?=$_SESSION['username']?> / <?=$_SESSION['role']?></h5>
    </center>
    <br>
	<?php
	include "../connect.php";
	$hasil = mysqli_query($connect, "select * from outlet");
	$num = mysqli_num_rows($hasil);
	if ($num >= 1) {
		while ($akun = mysqli_fetch_assoc($hasil)) {
			?>
			<hr>
			<div class="col-2 col-s-2">
				ID<br>
				Nama<br>
				Alamat<br>
			</div>
			<div class="col-10 col-s-10">
				: <?=$akun['id']?><br>
				: <?=$akun['nama']?><br>
				: <?=$akun['alamat']?><br>
			</div>
			<hr>
			<?php
		}
	} else {
		echo "<center><td colspan='3'>Tidak Ada Data</td></center>";
		echo "<br><br><br><br><br>";
	}?>
</div>