<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - Donut</title>
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
				<h1 class="center">Android 1.6 "Donut"</h1>
						<img src="../images/donut1.6.png" width="160" height="150" style="float: left;">

				<p style="margin-left: 165px; padding: 30px;">Versi pembaruan Android berikutnya adalah versi 1.6 Donut yang dirilis pada tanggal 15 September 2009. Pada versi Donut ini, Android menambahkan beberapa fitur seperti persentase daya baterai, dukungan gestur, fasilitas pencarian di Android Market atau yang sekarang kita kenal dengan Play Store.</p>
				<figure class="imgborder">
					<img src="../screenshot/donut/1.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/donut/2.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/donut/3.png" width="155" height="260" style="float: left;">
				</figure>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>