<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - Froyo</title>
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
				<h1 class="center">Android 2.2-2.2.3 "Froyo"</h1>
						<img src="../images/froyo2.2.png" width="150" height="150" style="float: left;">

				<p style="margin-left: 165px; padding-top : 39px;">Pada tanggal 20 Mei 2010, Android kembali meluncurkan versi terbarunya yaitu versi 2.2 Froyo. Pada versi Froyo ini Android sudah mulai dikenal luas oleh vendor atau pabrikan ponsel. Pembaruan Android 2.2 membawa beberapa fitur unggulan seperti memperbesar gambar pada galeri dengan gestur, peningkatan fitur USB tethering dan hotspot WIFI serta dukungan animasi GIF pada web browser.</p>
				<br>
				<figure class="imgborder">
					<img src="../screenshot/froyo/1.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/froyo/2.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/froyo/3.jpg" width="155" height="260" style="float: left;">
				</figure>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>