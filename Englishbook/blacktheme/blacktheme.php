<?php 

require_once "blacktheme_style.php";
if(!empty($_GET['file']))
{
	$filename = basename($_GET['file']);
	$filepath = 'destination/' . $filename;
	if(!empty($filename) && file_exists($filepath)){

		header("Cache-Control: public");
		header("Content-Description: FIle Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/zip");
		header("Content-Transfer-Emcoding: binary");

		readfile($filepath);
		exit;

	}
	else{
		echo "This File Does not exist.";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>BlackTheme EnglishBook</title>
		<link rel="stylesheet" href="blacktheme_css/blacktheme.css">
		<link rel="stylesheet" href="blacktheme_css/blacktheme-media.css">
	</head>
	<body>
		<div class="decor1"></div>
		<div class="decor1"></div>
		<div id="block">
			<nav>
				<ul>
					<li>
						<a href="#" class="Logo">EnglishBook</a>
					</li>
					<li>
						<a href="../index.php" class="theme-black">
							<ion-icon name="invert-mode-outline" class="theme"></ion-icon>
						</a>
					</li>
				</ul>
			</nav>
			<h1>Top English Book For Study</h1>
			<main>
				<div class="list">
					<?php foreach ($products as $product) : ?>
					<div class="book">
						<img src="<?php echo $product['img']?>" alt="">
						<h3><?php echo $product['name'] ; ?></h3>
						<a href="<?php echo $product['file'] ?>" class="download">Download</a>
					</div>
					<?php endforeach; ?>
				</div>
			</main>
			<footer>
				<p>© EnglishBook</p>
			</footer>
		</div>
	<!-- SCRIPT -->
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	</body>
</html>