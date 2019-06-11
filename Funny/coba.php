<form action="" method="post">
	<input type="radio" name="pet" value="Rabbit">Rabbit&nbsp;
	<input type="radio" name="pet" value="Cat">Cat&nbsp;
	<input type="submit" name="proses" value="Proses">&nbsp;
</form>

<?php
	if(isset($_POST['proses'])){
		$value=$_POST['pet'];
		echo "<script>alert('Your pet is a $value');
			history.go(-1);</script>";
	}
?>