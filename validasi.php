<!DOCTYPE html>
<html>
<head>
	<style>
		.eror
		{
		 color: #ff0000;
		}
		
	</style>
	<title></title>
</head>
<body>
	<h2>PHP Form Validasi</h2>
	<form action="berhasil.php" method="post">
	Nama : <input type="text" name="nama"> 
	<span class="eror">
	<?php 
	if(isset($_GET["errnama"]))
	{
		$err = $_GET["errnama"];
		echo $err;
	}
	?>
	</span>
	
	<br/>

	Umur : <input type="text" name="umur">
	<span class="eror">
	<?php 
	if(isset($_GET["errumur"]))
	{
		$err = $_GET["errumur"];
		echo $err;
	}
	?>
	</span>
	<br/>

	<input type="submit" value="Kirim">
	</form>
</body>
</html>