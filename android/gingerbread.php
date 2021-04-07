<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - Gingerbread</title>
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
				<h1 class="center">Android 2.3-2.3.7 "Gingerbread"</h1>
						<img src="../images/gb2.3.png" width="175" height="150" style="float: left;">

				<p style="margin-left: 175px; padding: 15px;">Pada versi ini tidak bisa diragukan lagi Android telah menjadi sistem operasi mobile yang populer. Kerjasama dengan pabrikan Samsung dalam membuat produk Samsung Galaxy Series semakin menambah kepopuleran Android. Versi 2.3 Gingerbread dirilis pada tanggal 6 Desember 2010 dengan menambah beberapa fitur seperti dukungan NFC, fitur copy atau paste dengan memilih kata melalui layar yang ditekan serta dukungan beberapa sensor lainnya.</p>
				<figure class="imgborder">
					<img src="../screenshot/gingerbread/1.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/gingerbread/2.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/gingerbread/3.jpg" width="155" height="260" style="float: left;">
				</figure>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>