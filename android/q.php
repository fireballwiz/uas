<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - Q</title>
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
				<h1 class="center">Android 10 "Q"</h1>
						<img src="../images/q10.png" width="150" height="150" style="float: left;">

				<p style="padding: 15px; margin-left: 150px;">Nama Android berikutnya yang paling terbaru tidak diberi nama seperti pendahulunya yang berkaitan dengan makanan manis. Versi Android terbaru diberi nama Android 10 untuk memperingati bahwa Android telah mencapai 1 dekade secara komersial. Versi Android 10 lebih berfokus pada penyempurnaan mode malam atau gelap serta peningkatan fitur sound amplifier untuk mengatur kualitas audio.</p>
				<figure class="imgborder">
					<img src="../screenshot/q/1.png" width="155" height="300" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/q/2.png" width="155" height="300" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/q/3.png" width="155" height="300" style="float: left;">
				</figure>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>