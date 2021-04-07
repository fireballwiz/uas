<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location: login.php");	
	}
?>

<html>
<head>
	<title>Android Circulation - About Me</title>
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
				<h1 class="center">About Me</h1>
						<table>
							<tr>
								<td>
									<img src="./images/gmail.png" width="50" height="50">
								</td>
								<td>
									muhammadfarras2@gmail.com<br>
									farras20tk@mahasiswa.pcr.ac.id
								</td>
							</tr>
							<tr>
								<td>
									<img src="./images/fb.png" width="50" height="50">
								</td>
								<td>
									Muhammad Farras
								</td>
							<tr>
								<td>
									<img src="./images/ig.png" width="50" height="50">
								</td>
								<td>
									@mhd_farras254
								</td>
							</tr>
							<tr>
								<td>
									<img src="./images/wa.png" width="50" height="50">
								</td>
								<td>
									+6282268119079
								</td>
							</tr>
							<tr>
								<td>
									<img src="./images/discord.png" width="50" height="50">
								</td>
								<td>
									FireballWiz#5078
								</td>
							</tr>
							<tr>
								<td>
									<img src="./images/tg.png" width="50" height="50">
								</td>
								<td>
									@FireballWiz
								</td>
							</tr>
						</table>
				</article>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</div>
</body>
</php>