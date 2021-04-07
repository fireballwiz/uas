<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - Cupcake</title>
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
				<h1 class="center">Android 1.5 "Cupcake"</h1>
						<img src="../images/cupcake1.5.png" width="150" height="150" style="float: left;">

				<p style="padding: 30px; ">Pada tanggal 30 April 2009, versi Android 1.5 "Cupcake" diperkenalkan secara komersial. Versi Cupcake merupakan generasi pertama yang dirilis secara komersial dan berawal dari sinilah Android mulai menggunakan nama makanan manis kepada setiap versi Android yang dirilisnya. Beberapa fitur yang dimiliki Android Cupcake seperti dukungan akan rotasi layar otomatis, widget, dan keyboard virtual.</p>
				<figure class="imgborder">
					<img src="../screenshot/cupcake/1.jpg" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/cupcake/2.webp" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/cupcake/3.jpg" width="155" height="260" style="float: left;">
				</figure>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>