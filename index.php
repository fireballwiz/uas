<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: login.php");	
	}
?>

<html>
<head>
	<title>Android Circulation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="icon.png">
</head>
<body>
	<div class="tengah">
		<?php include 'header.php'; ?>
		<div class="content">
			<?php include 'sidebar.php'; ?>
			<div class="utama">
				<article>
				<h1 class="center">Android</h1>
					<img src="./images/android.png" width="500" height="160" style="margin-left: auto; margin-right: auto; display: block;">
					<p>Android adalah sistem operasi berbasis Linux yang dirancang untuk perangkat bergerak layar sentuh seperti telepon pintar dan komputer tablet. Android awalnya dikembangkan oleh Android, Inc., dengan dukungan finansial dari Google, yang kemudian membelinya pada tahun 2005. Sistem operasi ini dirilis secara resmi pada tahun 2007, bersamaan dengan didirikannya Open Handset Alliance, konsorsium dari perusahaan-perusahaan perangkat keras, perangkat lunak, dan telekomunikasi yang bertujuan untuk memajukan standar terbuka perangkat seluler. Ponsel Android pertama mulai dijual pada bulan Oktober 2008.</p>
					<figure>
						<a href="./android/cupcake.php">
						<img src="images/cupcake1.5.png" width="150" height="150">
						<figcaption>Android 1.5<br>"Cupcake"</figcaption>
						</a>
					</figure>
					<figure>
						<a href="./android/donut.php">
						<img src="images/donut1.6.png" width="150" height="130">
						<figcaption>Android 1.6<br>"Donut"</figcaption>
						</a>
					</figure>
					<figure>
						<a href="./android/eclair.php">
						<img src="images/eclair2.0.png" width="150" height="100">
						<figcaption>Android 2.0-2.1<br>"Eclair"</figcaption>
						</a>
					</figure>
					<figure>
						<a href="./android/froyo.php">
						<img src="images/froyo2.2.png" width="150" height="141">
						<figcaption>Android 2.2-2.2.3<br>"Froyo"</figcaption>
						</a>
					</figure>
					<figure>
						<a href="./android/gingerbread.php">
						<img src="images/gb2.3.png" width="150" height="120">
						<figcaption>Android 2.3-2.3.7<br>"Gingerbread"</figcaption>
						</a>
					</figure>
					<figure>
						<a href="./android/honeycomb.php">
						<img src="images/honeycomb3.0.png" width="150" height="110">
						<figcaption>Android 3.0-3.2<br>"Honeycomb"</figcaption>
						</a>
					</figure>
					<figure>
						<a href="./android/ics.php">
						<img src="images/ics4.0.png" width="150" height="150">
						<figcaption>Android 4.0-4.0.4<br>"Ice Cream Sandwich"</figcaption>
						</a>
					</figure>
					<figure>
						<a href="./android/jellybean.php">
						<img src="images/jb4.1.png" width="150" height="125">
						<figcaption>Android 4.1-4.3<br>"Jelly Bean"</figcaption>
						</a>
					</figure>
					<figure>
						<a href="./android/kitkat.php">
						<img src="images/kk4.4.png" width="130" height="150">
						<figcaption>Android 4.4<br>"KitKat"</figcaption>
						</a>
					</figure>
					<figure>
						<a href="./android/lollipop.php">
						<img src="images/lollipop5.0.png" width="150" height="150">
						<figcaption>Android 5.0<br>"Lollipop"</figcaption>
						</a>
					</figure>
					<figure>
						<a href="./android/marshmallow.php">
						<img src="images/mm6.0.png" width="150" height="140">
						<figcaption>Android 6.0<br>"Marshmallow"</figcaption>
						</a>
					</figure>
					<figure>
						<a href="./android/nougat.php">
						<img src="images/nougat7.0.png" width="150" height="140">
						<figcaption>Android 7.0-7.1<br>"Nougat"</figcaption>
						</a>
					</figure>
					<figure>
						<a href="./android/oreo.php">
						<img src="images/oreo8.0.png" width="150" height="140">
						<figcaption>Android 8.0-8.1<br>"Oreo"</figcaption>
						</a>
					</figure>
					<figure>
						<a href="./android/pie.php">
						<img src="images/pie9.png" width="150" height="140">
						<figcaption>Android 9<br>"Pie"</figcaption>
						</a>
					</figure>
					<figure>
						<a href="./android/q.php">
						<img src="images/q10.png" width="150" height="140">
						<figcaption>Android 10<br>"Q"</figcaption>
						</a>
					</figure>
				</article>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</div>
</body>
</php>
