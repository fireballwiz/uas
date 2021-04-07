<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - Nougat</title>
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
				<h1 class="center">Android 7.0-7.1 "Nougat"</h1>
						<img src="../images/nougat7.0.png" width="150" height="150" style="float: left;">

				<p style="padding: 15px;">Diperkenalkan pada tanggal 19 Oktober 2016 Android 7.0 Nougat berfokus pada peningkatan performa user interface sehingga lebih intuitif dan penggunaan aplikasi secara bersamaan lebih banyak pada fitur multi window. Selain peningkatan fitur tadi, Android Nougat juga menambahkan beberapa fitur lain seperti dukungan cahaya malam atau mode malam, keyboard default yang dapat mengirim animasi GIF langsung dan dukungan panggilan multi-endpoint.</p>
				<figure class="imgborder">
					<img src="../screenshot/nougat/1.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/nougat/2.jpg" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/nougat/3.png" width="155" height="260" style="float: left;">
				</figure>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>