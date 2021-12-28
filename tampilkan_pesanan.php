<?php

include("koneksi.php");


	$sql = "SELECT * FROM pemesanan";

	$query = mysqli_query($koneksi, $sql);

	if(mysqli_num_rows($query)>0) {
		while($row = mysqli_fetch_array($query)) {
			
				echo "ID :". 				$row['id'] ."<br>" ;
				echo "NAMA :" .				$row['namapemesan'] ."<br>";
				echo "Nomor Indentitas :". 	$row['nomoridentitas'] ."<br>";
				echo "Jenis Kelamin :".		$row['jeniskelamin'] ."<br>" ;
				echo "Tipe Kamar :".		$row['tipekamar'] ."<br>" ;
				echo "Tanggal Pesan :".		$row['tanggalpesan'] ."<br>" ;
				echo "Durasi Penginapan :".	$row['durasipenginapan'] ."<br>" ;
				echo "Breakfast :".	$row['breakfast'];
			
		}
	}

?>