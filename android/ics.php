<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - Ice Cream Sandwich</title>
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
				<h1 class="center">Android 4.0-4.0.4 "Ice Cream Sandwich"</h1>
						<img src="../images/ics4.0.png" width="150" height="150" style="float: left;">

				<p style="padding: 27px;">Tepat pada tanggal 19 Oktober 2011 Android kembali meluncurkan versi terbarunya 4.0 Ice Cream Sandwich. Versi ini membawa fitur yang dimiliki oleh Honeycomb untuk bisa berjalan pada smartphone yang sebelumnya hanya ditujukan untuk tablet PC. Selain fitur yang sebelumnya ada di Honeycomb, versi 4.0 juga menambahkan beberapa fitur lain seperti perbaikan antarmuka dan kostumisasi widget.</p>
				<figure class="imgborder">
					<img src="../screenshot/ics/1.jfif" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/ics/2.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/ics/3.png" width="155" height="260" style="float: left;">
				</figure>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>