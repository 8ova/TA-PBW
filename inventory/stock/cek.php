<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['role']="stock"){
		
	}
	else if($_SESSION['role']="kitchen"){
		
	}
	else if($_SESSION['role']="bar"){
		
	}
	else{
		header("location:../index.php?pesan=belum_login");
	}
	?>