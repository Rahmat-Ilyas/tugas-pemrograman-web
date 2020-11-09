<?php 
$conn = mysqli_connect("localhost", "root", "", "db_tugas");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2 Pemrograman Web</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>Biodata</h1>
			<form method="post">

				<label>Nama</label>
				<input type="text" name="nama" placeholder="Masukkan Nama.." required>

				<label>NIM</label>
				<input type="number" name="nim" placeholder="Masukkan Nim.." required>

				<label>Fakultas</label>
				<select name="fakultas">
					<option>Saintek</option>
					<option>Febi</option>
					<option>Syariah</option>
					<option>Ushuluddin</option>
					<option>Tarbiyah</option>
					<option>Dakwah</option>
					<option>Kesehatan</option>
				</select>
				
				<label>Program Studi</label>
				<select name="jurusan">
					<option>Sistem Informasi</option>
					<option>Teknik Informatika</option>
					<option>Arsitektur</option>
					<option>Peternakan</option>
					<option>Matematika</option>
					<option>Kimia</option>
					<option>Biologi</option>
					<option>Fisika</option>
					<option>PWK</option>
				</select>

				<label>Status Akademik</label>
				<div id="radio">
					<input id="aktif" name="status" type="radio" value="Aktif" checked>
					<label for="aktif">Aktif</label>
					<input id="lulus" name="status" type="radio" value="Lulus">
					<label for="lulus">Lulus</label>
					<input id="nonaktif" name="status" type="radio" value="Non Aktif">
					<label for="nonaktif">Non Aktif</label>
					<input id="dropout" name="status" type="radio" value="Dropout">
					<label for="dropout">Dropout</label>
				</div>

				<button type="submit" name="submit" value="submit">Submit</button>
				<input type="reset" value="Reset">

			</form>
		</div>

		<?php if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$fakultas = $_POST['fakultas'];
		$jurusan = $_POST['jurusan'];
		$status = $_POST['status'];
		?>
		<div>
			<h1>Data Berhasil Diinputan</h1>
			<hr>
			<span>Nama: <?= $nama ?></span><br>
			<span>NIM: <?= $nim ?></span><br>
			<span>Fakultas: <?= $fakultas ?></span><br>
			<span>Program Studi: <?= $jurusan ?></span><br>
			<span>Status Akademin: <?= $status ?></span><br>
		</div>
		<?php 
		mysqli_query($conn, "INSERT INTO tb_mahasiswa VALUES (NULL, '$nama', '$nim', '$fakultas', '$jurusan', '$status')");
		} ?>
		<br>
		<h1>Data Mahasiswa</h1>
		<hr>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nama</th>
		      <th scope="col">NIM</th>
		      <th scope="col">Fakultas</th>
		      <th scope="col">Program Studi</th>
		      <th scope="col">Status Akademik</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  	$result = mysqli_query($conn, "SELECT * FROM tb_mahasiswa");
		  	$no = 1;
		  	foreach ($result as $dta) { ?>
		    <tr>
		      <th scope="row"><?= $no ?></th>
		      <td><?= $dta["nama"] ?></td>
		      <td><?= $dta["nim"] ?></td>
		      <td><?= $dta["fakultas"] ?></td>
		      <td><?= $dta["jurusan"] ?></td>
		      <td><?= $dta["status"] ?></td>
		    </tr>
			<?php $no = $no +1; } ?>
		  </tbody>
		</table>
	</div>
</body>
<style type="text/css">
	input[type=text], select {
		width: 100%;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		margin-top: 6px;
		margin-bottom: 16px;
		resize: vertical;
	}
	
	input[type=number] {
		width: 100%;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		margin-top: 6px;
		margin-bottom: 16px;
		resize: vertical;
	}

        button[type=submit] {
		background-color: #4CAF50;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

        button[type=submit]:hover {
		background-color: #45a049;
	}

	input[type=reset] {
		background-color: #FF5252;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	input[type=reset]:hover {
		background-color: #FF5252;
	}

	.container {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 10px 50px 40px 50px;
		margin: 0px 200px;
	}

	#radio {
		width: 100%;
		padding: 12px;
		border-radius: 4px;
		box-sizing: border-box;
		margin-top: 6px;
		margin-bottom: 16px;
		resize: vertical;
	}
</style>
</html>
