<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - KitKat</title>
	<link rel="stylesheet" type="text/css" href="../style.css" />
<link rel="icon" type="image/png" href="../icon.png">
</head>
<body>
	<div class="tengah">
		<?php include 'header.php'; ?>
		<div class="content">
			<?php include 'sidebar.php'; ?>
			<div class="utama">
				<article>
				<h1 class="center">Android 4.4 "KitKat"</h1>
						<img src="../images/kk4.4.png" width="160" height="150" style="float: left;">

				<p style="padding: 15px; margin-left: 165px;">Nama KitKat dipilih Android untuk digunakan pada versi terbarunya yaitu versi 4.4 yang diresmikan pada tanggal 31 Oktober 2013. Pada versi ini Android meningkatkan optimalisasi dengan memberikan fitur yang lebih baik. Beberapa fitur yang dibawa android KitKat seperti WebViews yang berbasiskan Chromium, pengoptimalan kinerja terhadap perangkat dengan spesifikasi rendah, dukungan sensor batching dan step detector.</p>
				<figure class="imgborder">
					<img src="../screenshot/kitkat/1.jpg" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/kitkat/2.webp" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/kitkat/3.png" width="155" height="260" style="float: left;">
				</figure>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>