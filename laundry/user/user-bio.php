<div class="halaman">
	<center>
        <h5 class="role">Login sebagai : <?=$_SESSION['username']?> / <?=$_SESSION['role']?></h5>
    </center>
	<?php
	include "../connect.php";
	$id = $_SESSION['id'];
	$query = "select * from user join member on user.id = member.id where user.id = $id";
	$hasil = mysqli_query($connect, $query);
	$num = mysqli_num_rows($hasil);
	if ($num >= 1) {
		$akun = mysqli_fetch_assoc($hasil);
		if ($akun['jenis_kelamin'] == "l"){
			$jk = "Laki-laki";
		} else if ($akun['jenis_kelamin'] == "p"){
			$jk = "Perempuan";
		}
		?>
		<hr>
			<div class="col-3 col-s-3">
				ID<br>
				Nama<br>
				Username<br>
				Alamat<br>
				No. Telepon<br>
				Jenis kelamin<br>
			</div>
			<div class="col-9 col-s-9">
				: <?=$akun['id']?><br>
				: <?=$akun['nama']?><br>
				: <?=$akun['username']?><br>
				: <?=$akun['alamat']?><br>
				: <?=$akun['telepon']?><br>
				: <?=$jk?><br>
			</div>
		<hr>
		<?php
	} else {
		echo "<td colspan='3'>Tidak Ada Data</td>";
	}?>
</div>