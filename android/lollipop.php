<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: ../login.php");	
	}
?>
<html>
<head>
	<title>Android Circulation - Lollipop</title>
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
				<h1 class="center">Android 5.0 "Lollipop"</h1>
						<img src="../images/lollipop5.0.png" width="150" height="150" style="float: left;">

				<p style="padding: 20px; padding-left: 160px;">Versi Android selanjutnya adalah versi 5.0 Lollipop yang dirilis pada tanggal 25 Juni 2014. Pada versi ini Android tidak hanya menjadi sistem operasi pada perangkat smartphone, namun juga telah berjalan pada perangkat mobile lainnya seperti Android TV dan juga Google Fit. Beberapa fitur yang ditambahkan pada versi ini adalah user interface yang mengikuti desain Google yaitu material design dan fitur factory reset protection untuk menjaga smartphone agar tidak di reset apabila hilang.</p>
				<figure class="imgborder">
					<img src="../screenshot/lollipop/1.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/lollipop/2.png" width="155" height="260" style="float: left;">
				</figure>
				<figure class="imgborder">
					<img src="../screenshot/lollipop/3.png" width="155" height="260" style="float: left;">
				</figure>
				</article>
			</div>
		</div>
		<?php include '../footer.php'; ?>
	</div>
</body>
</html>