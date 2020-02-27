<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}

echo !empty($statusPsn)?'<p class="'.$jenisStatusPsn.'">'.$statusPsn.'</p>':'';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem registrasi dan login dengan PHP dan MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<div id="wrapper">
    <div id="header">
        <p>Welcome To HWD Invitation
    <nav id="menu">
  		<ul>
   			<li><a href="index.html">Beranda</a></li>
   			<li><a href="#about">Tentang</a></li>
   			<li><a href="#paket">Paket Undangan</a></li>
   			<li><a href="#kontak">Kontak</a></li>
            <li><a href="index.php#masuk">Masuk</a></li>
            <li><a href="#daftar">Daftar</a></li>
  		</ul>
 	</nav>
    </div>
    <div id="content">
    	<div id="home">
    		<img src="img/home-banner.jpg" style="margin-top: 75px;">
    	</div>
    	<div id="logo">
    		<img src="img/logo.png">
    	</div>


	<div class="container" style="text-align: center; width: 100%; position:relative; background:#FF69B4; margin-top: 20px; padding-top: 10px;padding-bottom: 10px; color: white;">
		<h1>Silahkan Registrasi Sebelum Memesan Undangan Digital</h1>
    	<h3>Buat akun baru</h3>
			<form action="akunuser.php" method="post">
				<input type="text" name="nama_awal" placeholder="Nama Awal" required=""><br><br>
				<input type="text" name="nama_akhir" placeholder="Nama Akhir" required=""><br><br>
				<input type="email" name="email" placeholder="Email" required=""><br><br>
				<input type="text" name="telp" placeholder="Nomor Telp" required=""><br><br>
				<input type="password" name="password" placeholder="Password" required=""><br><br>
				<input type="password" name="confirm_password" placeholder="Konfirmasi Password" required=""><br><br>
				<div class="tbl-kirim"><br>
					<input type="submit" name="daftarSubmit" value="Buat Akun">
				</div>
			</form>
	</div>
</header>
</body>
</html>