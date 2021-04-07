<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - Jelly Bean</title>
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
				<h1 class="center">Android 4.1-4.3 "Jelly Bean"</h1>
						<img src="../images/jb4.1.png" width="150" height="150" style="float: left;">

				<p style="padding: 15px;">Android 4.1 Jelly Bean dirilis pada tanggal 27 Juni 2012. Pengembangan versi Jelly Bean lebih berfokus terhadap peningkatan performa tampilan antarmuka. Fitur terbaru yang disematkan pada versi Jelly bean adalah keyboard yang bisa dikostumisasi oleh pengguna dan dukungan gestur pada keyboard, UI yang lebih smooth, dukungan tampilan nirkabel, widget yang bisa diatur dan disesuaikan ukurannya.</p>
				<br>
				<figure class="imgborder">
					<img src="../screenshot/jellybean/1.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/jellybean/2.jpg" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/jellybean/3.png" width="155" height="260" style="float: left;">
				</figure>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>