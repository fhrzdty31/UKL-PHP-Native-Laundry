<div class="halaman">
	<center>
        <h5 class="role">Login sebagai : <?=$_SESSION['username']?> / <?=$_SESSION['role']?></h5>
    </center>
    <button type="submit" name="buat" class="btn2" onClick="buat()">Buat Akun</button>
    <script>
        function buat(){
            alert('Buat Akun Baru ?');window.location='../user/form-buat.php'
        }
    </script>
</div>
<div class="halaman">
<?php
include "../connect.php";
$query = "select * from user join member on user.id = member.id";
$hasil = mysqli_query($connect, $query);
$num = mysqli_num_rows($hasil);
if ($num >= 1) {
	while ($akun = mysqli_fetch_assoc($hasil)) {
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
				Role<br>
           	</div>
            <div class="col-9 col-s-9">
                : <?=$akun['id']?><br>
				: <?=$akun['nama']?><br>
				: <?=$akun['username']?><br>
				: <?=$akun['alamat']?><br>
				: <?=$akun['telepon']?><br>
				: <?=$jk?><br>
				: <?=$akun['role']?><br>
            </div>
			<div>
			<a href='../user/form-update.php?id=<?php echo $akun['id'] ?>'>
				<button type="button" class="btn3">
					Edit
				</button>
			</a>
			<a href="../user/hapus-user.php?id=<?php echo $akun['id'] ?>" onclick="return confirm('Apakah Anda yakin menghapus akun ini?')">
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