<!DOCTYPE html>
<html>
<head>
	<?php include 'include/head.php'; ?>
</head>
<body>
	<?php include 'include/loader.php'; ?>
	<?php include 'include/header.php'; ?>
	<!-- label -->

	<section class="label">
		<div class="container">
			<p>HOME / MOVIE</p>
		</div>
	</section>

	<!-- about -->
	<section class="movie">
		<div class="container">
			<h3><u>FAVORITE MOVIES</u></h3>
			<img src="img/howl.jpg" alt="Howl" width="200" height="250">
			<h3>Howl's Moving Castle</h3>
			<p>When an unconfident young woman is cursed with an old body by a spiteful witch, her only chance of breaking the spell lies with a self-indulgent yet insecure young wizard and his companions in his legged, walking castle.</p>
			<img src="img/your.jpg" alt="Your" width="200" height="250">
			<h3>Your Name</h3>
			<p>Two strangers find themselves linked in a bizarre way. When a connection forms, will distance be the only thing to keep them apart?</p>
			<img src="img/pope.jpg" alt="Pope" width="200" height="250">
			<h3>The Two Popes</h3>
			<p>Behind Vatican walls, the conservative Pope Benedict XVI and the liberal future Pope Francis must find common ground to forge a new path for the Catholic Church.</p>
			<img src="img/fatima.jpg" alt="Fatima" width="200" height="250">
			<h3>Fatima</h3>
			<p>Based on historical events, three young shepherds in Fátima, Portugal, report visions of the Virgin Mary, inspiring believers and angering officials of the Church and the government, who try to force them to recant their story.</p>
		</div>
	</section>

	<? php include 'include/footer.php'; ?>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>

</body>
</html>
	