<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - Honeycomb</title>
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
				<h1 class="center">Android 3.0-3.2 "Honeycomb"</h1>
						<img src="../images/honeycomb3.0.png" width="170" height="150" style="float: left;">

				<p style="margin-left: 175px; padding: 15px;">Versi Android berikutnya adalah versi 3.0 Honeycomb yang diperkenalkan pada tanggal 22 Februari 2011. Versi Android ini dikhususkan untuk perangkat tablet PC, dengan membawa beberapa fitur yang ditujukan untuk komputasi bisnis pada tablet. Fitur yang dimiliki Android Honeycomb seperti dukungan prosesor multi core, dukungan obrolan video dengan Google Talk dan percepatan saat berpindah aplikasi yang sedang berjalan dengan fitur multitasking Recent apps.</p>
				<figure class="imgborder">
					<img src="../screenshot/honeycomb/1.png" width="585" height="348" style="margin-left: auto; margin-right: auto;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/honeycomb/2.png" width="585" height="348" style="margin-left: auto; margin-right: auto;">
				</figure>
				<br><br><br>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>