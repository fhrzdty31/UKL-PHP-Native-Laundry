<div class="halaman">
	<center>
        <h5 class="role">Login sebagai : <?=$_SESSION['username']?> / <?=$_SESSION['role']?></h5>
    </center>
	<br>
	<?php
	include "../connect.php";
	$hasil = mysqli_query($connect, "select * from paket");
	$num = mysqli_num_rows($hasil);
	if ($num >= 1) {
		while ($akun = mysqli_fetch_assoc($hasil)) {
			if ($akun['jenis'] == "cs"){
				$jenis = "Cuci Setrika";
			} else if ($akun['jenis'] == "csk"){
				$jenis = "Cuci Setrika Kilat";
			} else if ($akun['jenis'] == "ck"){
				$jenis = "Cuci Kering";
			} else if ($akun['jenis'] == "s"){
				$jenis = "Setrika";
			} else if ($akun['jenis'] == "bd"){
				$jenis = "Bed Cover";
			} else if ($akun['jenis'] == "gr"){
				$jenis = "Groden";
			} else if ($akun['jenis'] == "sl"){
				$jenis = "Selimut";
			}
			?>
			<hr>
			<div class="col-2 col-s-2">
				ID<br>
				Jenis<br>
				Harga<br>
			</div>
			<div class="col-10 col-s-10">
				: <?=$akun['id']?><br>
				: <?=$jenis?><br>
				: Rp.<?=$akun['harga']?><br>
			</div>
			<div>
				<a href='../paket/form-update.php?id=<?php echo $akun['id'] ?>'>
					<button type="button" class="btn3">
						Edit
					</button>
				</a>
			</div>
			<hr>
			<?php
		}
	} else {
		echo "<center><td colspan='3'>Tidak Ada Data</td></center>";
		echo "<br><br><br><br><br>";
	}?>
</div>