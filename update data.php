
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>NPM</td>
					<td>
						<input type="number" name="npm" value="<?php echo $d['id']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA</td>
					<td><input type="text" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td><input type="text" name="jurusan" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
                <td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>

