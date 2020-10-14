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
			<p>HOME / ABOUT</p>
		</div>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3><u>ABOUT</u></h3>
			<img src="img/me.jpeg" alt="Me" width="350" height="350">
			<p>Just a little human who still curious about her own life. Always optimistic, little bit clumsy, and rude if it’s needed. Too talkative but deep inside is a thinker. Like to discover something new and learn it too, well, this world is too small if we use fences everywhere. Like physics and something related to computer so much. Hope is her sacred word.</p>
		</div>
	</section>

	<!-- footer -->
	<? php include 'include/footer.php'; ?>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>

</body>
</html>
	