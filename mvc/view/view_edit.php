<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr align="center">
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" value="<?=$row[0]?>" size="45" readonly /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$row[1]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" value="<?=$row[2]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" value="<?=$row[3]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" value="<?=$row[4]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Film Favorit</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="film[]" value="Horror" <?php if(strpos(" ".$row['film'],"Horror")) echo "Checked"; ?>>Horror<br>
						<input type="checkbox" name="film[]" value="Action" <?php if(strpos(" ".$row['film'],"Action")) echo "Checked"; ?>>Action<br>
						<input type="checkbox" name="film[]" value="Anime" <?php if(strpos(" ".$row['film'],"Anime")) echo "Checked"; ?>>Anime<br>
						<input type="checkbox" name="film[]" value="Thriller" <?php if(strpos(" ".$row['film'],"Thriller")) echo "Checked"; ?>>Thriller<br>
						<input type="checkbox" name="film[]" value="Animasi" <?php if(strpos(" ".$row['film'],"Animasi")) echo "Checked"; ?>>Animasi<br>
					</td>
				</tr>
				<tr align="center">
					<td>Tujuan Wisata</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="wisata[]" value="Bali" <?php if(strpos(" ".$row['wisata'],"Bali")) echo "Checked"; ?>>Bali<br>
						<input type="checkbox" name="wisata[]" value="Raja Ampat" <?php if(strpos(" ".$row['wisata'],"Raja Ampat")) echo "Checked"; ?>>Raja Ampat<br>
						<input type="checkbox" name="wisata[]" value="Pulau Derawan" <?php if(strpos(" ".$row['wisata'],"Pulau Derawan")) echo "Checked"; ?>>Pulau Derawan<br>
						<input type="checkbox" name="wisata[]" value="Bangka Belitung" <?php if(strpos(" ".$row['wisata'],"Bangka Belitung")) echo "Checked"; ?>>Bangka Belitung<br>
						<input type="checkbox" name="wisata[]" value="Labuan Bajo" <?php if(strpos(" ".$row['wisata'],"Labuan Bajo")) echo "Checked"; ?>>Labuan Bajo<br>
					</td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi update pada controller
		$main = new controller();
		$main->update();
		//panggil controller update
	}
?>
