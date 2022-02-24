<div class="halaman">
	<center>
        <h5 class="role">Login sebagai : <?=$_SESSION['username']?> / <?=$_SESSION['role']?></h5>
    </center>
    <button type="submit" name="buat" class="btn2" onClick="tambah()">Tambah Transaksi</button>
    <script>
        function tambah(){
            alert('Tambah Transaksi ?');window.location='../user/form-tambah.php'
        }
    </script>
</div>
<div class="halaman">
<?php
include "../connect.php";
$hasil = mysqli_query($connect, "select * from transaksi");
$num = mysqli_num_rows($hasil);
if ($num >= 1) {
	while ($akun = mysqli_fetch_assoc($hasil)) {
		?>
		<hr>
		<div class="col-3 col-s-3">
            ID transaksi<br>
			ID member<br>
			Tanggal<br>
			Batas wakti<br>
			Tanggal bayar<br>
			Status<br>
			Dibayar<br>
        </div>
        <div class="col-9 col-s-9">
            : <?=$akun['id']?><br>
			: <?=$akun['id_member']?><br>
			: <?=$akun['tanggal']?><br>
			: <?=$akun['batas_waktu']?><br>
			: <?=$akun['tgl_bayar']?><br>
			: <?=$akun['status']?><br>
			: <?=$akun['dibayar']?><br>
        </div>
		<div>
			<a href="../user/hapus-user.php?id=<?php echo $akun['id'] ?>" onclick="return confirm('Apakah Anda yakin menghapus akun ini?')">
				<button type="button" class="btn4">
					Hapus
				</button>
			</a>
		</div>
		<?php
	}
} else {
	echo "<center><td colspan='3'>Tidak Ada Data</td></center>";
	echo "<br><br><br><br><br>";
}?>
</div>