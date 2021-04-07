<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - Pie</title>
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
				<h1 class="center">Android 9 "Pie"</h1>
						<img src="../images/pie9.png" width="130" height="150" style="float: left;">

				<p style="padding: 15px; margin-left: 155px;">Android 9 Pie merupakan versi Android terbaru yang dirilis pada bulan Agustus 2018. Fitur unggulan yang dimiliki oleh versi 9 Pie ini adalah kemampuan AI atau kecerdasan buatan. Dengan fitur AI smartphone kamu akan menganalisa dan mempelajari pola pemakaian kamu menggunakan smartphone secara otomatis. Selain itu fitur lainnya yang diusung seperti Adaptive Brightness yang akan menyesuaikan kecerahan layar secara otomatis dan dukungan pada ponsel bezel less.</p>
				<figure class="imgborder">
					<img src="../screenshot/pie/1.png" width="155" height="300" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/pie/2.png" width="155" height="300" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/pie/3.png" width="155" height="300" style="float: left;">
				</figure>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>