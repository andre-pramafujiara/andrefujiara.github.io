<?php  
	include 'db.php';

	$data = mysqli_query($conn, "SELECT * FROM tb_gambar WHERE id_gambar = '".$_GET['id']."'");
	$r = mysqli_fetch_array($data);

	$nama = $r['nama'];
	$file = $r['file'];

	?>
<!DOCTYPE html>
<html>
<head>
	<title>halaman edit data</title>
</head>
<body style="background: url(assets/img/company.jpg);">

	<div style="background: rgba(0,0,0,0.8); width: 700px; margin-left: 300px; border-radius: 30px;padding-top: 20px;padding-bottom: 20px">
		<h2 style="text-align: center; color: white;">Silahkan Edit Data</h2>
	<a href="index.php#galeri" style="margin-left: 200px; font-size: 15px; color: white">Lihat Data</a>
	<form action="" method="post" enctype="multipart/form-data">
		<table style="
		margin-left: 200px;
		color: white">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
			</tr>
			<tr>
				<td>File</td>
				<td>:</td>
				<td>
					<input type="hiden" name="img2" value="<?php echo $nama ?>">
					<input type="file" name="img"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><img src="gambar/<?php echo $file ?>" width="100px" heigth="100px"> </td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="kirim" value="Updet"></td>
			</tr>
		</table>
	</form>

	<?php	
		if(isset($_POST ['kirim'])){
			$nama = $_POST ['nama'];
			$nama_file = $_FILES['img']['name'];
			$source = $_FILES['img']['tmp_name'];
			$folder = './gambar/';

			if($nama_file !=''){
				move_uploaded_file($source, $folder.$nama_file);
				$updet = mysqli_query($conn, "UPDATE tb_gambar SET nama = '".$nama."', file = '".$nama_file."' WHERE id_gambar = '".$_GET['id']."'");
			}else{
				move_uploaded_file($source, $folder.$nama_file);
				$updet = mysqli_query($conn, "UPDATE tb_gambar SET nama = '".$nama."' WHERE id_gambar = '".$_GET['id']."'");
			}
		}
	  ?>
	</div>
</body>
</html>