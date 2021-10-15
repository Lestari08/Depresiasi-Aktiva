<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Akuntansi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$bil3 = $_POST['bil3'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = ($bil1-$bil2) / $bil3;
			break;
					
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">Penyusutan Aktiva Tetap</h2>
		<form method="post" action="index.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Biaya Perolehan Aset">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Nilai Residu">
			<input type="text" name="bil3" class="bil" autocomplete="off" placeholder="Umur Ekonomis">

			<select class="opt" name="operasi">
				<option value="tambah">Metode Garis Lurus</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?> 
			<input type="text" value="<?php echo "Hasil Rp. ". number_format($hasil, 0, ".", ",");; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>