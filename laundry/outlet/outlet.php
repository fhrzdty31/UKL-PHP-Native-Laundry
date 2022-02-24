<div class="halaman">
	<center>
        <h5 class="role">Login sebagai : <?=$_SESSION['username']?> / <?=$_SESSION['role']?></h5>
    </center>
    <button type="submit" name="buat" class="btn2" onClick="tambah()">Tambah Outlet</button>
    <script>
        function tambah(){
            alert('Tambah Outlet ?');window.location='../outlet/form-tambah.php'
        }
    </script>

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
			<div>
				<a href='../outlet/form-update.php?id=<?php echo $akun['id'] ?>'>
					<button type="button" class="btn3">
						Edit
					</button>
				</a>
				<a href="../outlet/hapus-outlet.php?id=<?php echo $akun['id'] ?>" onclick="return confirm('Apakah Anda yakin menghapus outlet ini?')">
					<button type="button" class="btn4">
						Hapus
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