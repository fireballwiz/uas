<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - Oreo</title>
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
				<h1 class="center">Android 8.0-8.1 "Oreo"</h1>
						<img src="../images/oreo8.0.png" width="150" height="150" style="float: left;">

				<p style="padding: 15px; margin-left: 145px;">Nama Oreo dipilih Android untuk digunakan pada versi Android 8.0 yang diluncurkan pada bulan Agustus 2017. User interface pada Android Oreo lebih simpel agar memudahkan dalam mengakses aplikasi. Pembaruan pada versi Oreo membawa beberapa fitur seperti fitur Autofill yang memberikan kemudahan dalam mengisi formulir misal, dukungan gambar dalam gambar dan pengoptimalan booting agar lebih cepat.</p>
				<figure class="imgborder">
					<img src="../screenshot/oreo/1.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/oreo/2.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/oreo/3.png" width="155" height="260" style="float: left;">
				</figure>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>