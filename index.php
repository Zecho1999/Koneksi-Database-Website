<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>HWD INVITATION</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="png" href="img/icon.png">
</head>
<body>
	<header>
	<div id="wrapper">
    <div id="header">
		<p><marquee>Welcome To HWD Invitation</marquee></p><br>
    <nav id="menu">
  		<br><ul>
   			<li><a href="index.html">Beranda</a></li>
   			<li><a href="#about">Tentang</a></li>
   			<li><a href="#paket">Paket Undangan</a></li>
   			<li><a href="#kontak">Kontak</a></li>
            <li><a href="#regisForm">Masuk</a></li>
            <li><a href="daftar.php">Daftar</a></li>
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

        <div class="container" style="text-align: center; width: 100%; position:relative; background:#696969; margin-top: 20px; padding-top: 10px;padding-bottom: 10px; color: white; font-size: 20px;">
        <?php
            if(!empty($sesiData['userLoggedIn']) && !empty($sesiData['userID'])){
                include 'user.php';
                $user = new User();
                $kondisi['where'] = array(
                    'id' => $sesiData['userID'],
                );
                $kondisi['return_type'] = 'single';
                $userData = $user->getRows($kondisi);
        ?>
        <h2>Selamat Datang <?php echo $userData['nama_awal']; ?>!</h2>
        <a href="akunuser.php?logoutSubmit=1" class="logout">Logout</a>
        <div id="regisForm">
            <p><b>Nama: </b><?php echo $userData['nama_awal'].' '.$userData['nama_akhir']; ?></p>
            <p><b>Email: </b><?php echo $userData['email']; ?></p>
            <p><b>Telp: </b><?php echo $userData['telp']; ?></p>
        </div>
        <?php }else{ ?>
        <h1>Silakan Login<br>Sebagai</h1><br>
        <ul>
            <li><a href="admin.php">Pemilik Kost</a></li>
            <li><a href="#about">Member</a></li><br>
        </ul>
        <?php echo !empty($statusPsn)?'<p class="'.$jenisStatusPsn.'">'.$statusPsn.'</p>':''; ?>
        
    </div>
    <?php } ?>
    	<div id="about">
    		<p>
    			<h1>About</h1><br>
    			
    		</p>
    	</div>

    	<div id="paket">
    		
    	</div>
<div id="kontak" style="background:#696969; width: 100%; margin-bottom: 20px; height: 80px;">
            <img src="img/WA.png" style="height: 80px; width: 80px;"><img src="img/IG.png" style="height: 80px; width: 80px; margin-left: 180px;"><img src="img/FB.png"style="height: 80px; width: 80px; margin-left: 100px;">
            <img src="img/GMAIL.png"style="height: 80px; width: 80px;">
        <p style="margin-top: -50px;"><a href="https://api.whatsapp.com/send?phone=6285694873565&text=Saya%20tertarik%20untuk%20membuat%20undangan digital" style="margin-left:100px;"> Order Lewat Whatsapp</a></p><br>
            <p style="margin-top: -50px;"><a href="mailto:hwdinvitation@gmail.com?subject=Pesan%20Undangan%20Digital atau judul disini&body=Saya%20pesan%20undangan%20digital%20paket%20silver tulisan yang di tubuh disini" style="margin-left: 360px;">Order Lewat Email</a></p>
        </div>
 
    </div>
    <div id="footer"><br>
    <a href="">Copyright @2019</a>
    </div>
    </div>
</header>
</body>
</html>