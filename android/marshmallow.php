<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - Marshmallow</title>
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
				<h1 class="center">Android 6.0 "Marshmallow"</h1>
						<img src="../images/mm6.0.png" width="150" height="150" style="float: left;">

				<p style="margin-left: 165px; padding: 20px;">Android 6.0 Marshmallow di perkenalkan pada tanggal 5 Mei 2015. Fitur yang dibawa oleh versi Android Marshmallow adalah dukungan sensor sidik jari untuk mengakses smartphone, fasilitas menjalankan beberapa aplikasi pada tata letak layar dengan dukungan multi window, dukungan platform virtual reality, dan kemampuan dalam mengurangi pemakaian bandwidth pada mode data saver.</p>
				<figure class="imgborder">
					<img src="../screenshot/marshmallow/1.jfif" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/marshmallow/2.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/marshmallow/3.png" width="155" height="260" style="float: left;">
				</figure>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>