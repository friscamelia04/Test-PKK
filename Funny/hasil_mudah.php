<?php
	$score = 0;
	$value1 = $_POST['satu'];
	$value2 = $_POST['dua'];
	$value3 = $_POST['tiga'];
	$value4 = $_POST['empat'];
	$value5 = $_POST['lima'];

	if($value1=="mother"){
		$score+=20;
	}
	else{
		$score+=0;
	}
	if($value2=="eye"){
		$score+=20;
	}
	else{
		$score+=0;
	}
	if($value3=="apple"){
		$score+=20;
	}
	else{
		$score+=0;
	}
	if($value4=="alpukat"){
		$score+=20;
	}
	else{
		$score+=0;
	}
	if($value5=="nenek"){
		$score+=20;
	}
	else{
		$score+=0;
	}

	if($score=="100"){
		$cetak="100";
	}
	elseif($score=="80"){
		$cetak="80";
	}
	elseif($score=="60"){
		$cetak="60";
	}
	elseif($score=="40"){
		$cetak="40";
	}
	elseif($score=="20"){
		$cetak="20";
	}
	elseif($score=="0"){
		$cetak="0";
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Funny | Nilai</title>
	<link rel="stylesheet" type="text/css" href="style_pehape.css"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" type="text/css" href="kenapa.css"/>
</head>
<body>
	<table align="center" width="75%" height="680px">
		<tr>
			<td class="konten_pilih">
				<table align="center">
				<form method="post" action="proses_mudah.php">
					<tr>
						<td colspan="2"><div class="tuliss">Nilai</div></td>
					</tr>
					<tr>
						<td align="center" colspan="2">
							<input class="jumlah" type="text" name="hasil" value="<?php echo $score; ?>" disabled>
						</td>
					</tr>
					<tr bgcolor="white">
						<td align="center" colspan="2" class="bintang">
							<?php
								$jumlah=$score/20;
								for($i=1;$i<=$jumlah;$i++){
									echo "<img src='images/star.png' width='90' height='90' align='center'>";
								}
							?>
						</td>
					</tr>
					<tr>
						<td class="tdnya" height="90px">
							<input class="okk" type="submit" name="lagi" value="Lagi">
						</td>
						<td class="tdnya" height="90px">
							<input class="okk" type="submit" name="kembali" value="Kembali">
						</td>
					</tr>
				</form>
			</table>
			</td>
		</tr>
	</table>
</body>
</html>