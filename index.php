<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2 Pemrograman Web</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Biodata</h1>
		<form action="action_page.php">

			<label>Nama</label>
			<input type="text" placeholder="Masukkan Nama..">

			<label>NIM</label>
			<input type="number" placeholder="Masukkan Nim..">

			<label>Fakultas</label>
			<select>
				<option>Saintek</option>
				<option>Febi</option>
				<option>Syariah</option>
				<option>Ushuluddin</option>
				<option>Tarbiyah</option>
				<option>Dakwah</option>
				<option>Kesehatan</option>
			</select>
			
			<label>Program Studi</label>
			<select>
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
				<input id="aktif" name="aktif" type="radio">
				<label for="aktif">Aktif</label>
				<input id="lulus" name="lulus" type="radio">
				<label for="lulus">Lulus</label>
				<input id="nonaktif" name="nonaktif" type="radio">
				<label for="nonaktif">Non Aktif</label>
				<input id="dropout" name="dropout" type="radio">
				<label for="dropout">Dropout</label>
			</div>

			<input type="submit" value="Submit">
			<input type="reset" value="Reset">

		</form>
	</div>
</body>
<style type="text/css">
	input[type=text], select, number {
		width: 100%;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		margin-top: 6px;
		margin-bottom: 16px;
		resize: vertical;
	}

	
	input[type=submit] {
		background-color: #4CAF50;
		color: white;
		padding: 12px 20px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	input[type=submit]:hover {
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
