<?php 
session_start();


$nama = $_POST['nama'];
$umur = $_POST['umur'];

if (empty($nama)) 
	{
	
	header("location:validasi.php?errnama= * Nama Belum Di Input");
	}
	elseif(empty($umur)) 
	{
	header("location:validasi.php?errumur= * Umur belum diisi"); 
	}
	else
	{
		echo"selamat datang".$nama."<br/> Umur Anda =".$umur;
	}
 ?>
