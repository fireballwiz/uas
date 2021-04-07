<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - Eclair</title>
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
				<h1 class="center">Android 2.0-2.1 "Eclair"</h1>
						<img src="../images/eclair2.0.png" width="180" height="150" style="float: left;">

				<p style="margin-left: 190px; padding: 25px;">Selang sebulan Android melakukan pembaruan kembali untuk memperbaiki bug dan memperkaya fiturnya tepatnya pada tanggal 26 Oktober 2009. Pembaruan Android versi 2.0 diberi nama Eclair dan pada versi ini terdapat beberapa fitur seperti multi touch, live wallpaper, perubahan tampilan antarmuka dan dukungan browser untuk HTML5.</p>
				<figure class="imgborder">
					<img src="../screenshot/eclair/1.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/eclair/2.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/eclair/3.png" width="155" height="260" style="float: left;">
				</figure>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>