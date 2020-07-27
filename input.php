<?php  
	include 'db.php';
	?>
<!DOCTYPE html>
<html>
<head>
	<title>halaman input data</title>
</head>
<body style="background: #eee">
	<div style="background: rgba(0,0,0,0.8); width: 400px; padding-top: 20px; padding-bottom: 20px; border-radius: 20px; margin-left: 200px; padding-right: 20px; padding-left: 20px ; color: white; margin-top: 50px">
		<h2>Silahkan Input Data</h2>
	<a href="index.php#galeri" style="color: yellow;">Lihat Data</a>
	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			
			<tr>
				<td>File</td>
				<td>:</td>
				<td><input type="file" name="img"></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="kirim" value="kirim"></td>
			</tr>
		</table>
	</form>

	<?php

		if(isset($_POST ['kirim'])){
			$nama = $_POST ['nama'];
			$nama_file = $_FILES['img']['name'];
			$source = $_FILES['img']['tmp_name'];
			$folder = './gambar/';

			move_uploaded_file($source, $folder.$nama_file);
			$insert = mysqli_query($conn, "INSERT INTO tb_gambar VALUES (NULL,'$nama','$nama_file')");

			if($insert){
				echo "berhasil";
			}else {
				echo "gagal";
			}
		}
	  ?>
	</div> 
</body>
</html>