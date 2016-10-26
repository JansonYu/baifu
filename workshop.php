<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>柏富毛纺-车间设备</title>

	<link rel="stylesheet" href="./css/slide.css">

	<link rel="stylesheet" href="./css/base.css">

	<!-- <link rel="stylesheet" href="./css/base.min.css"> -->

	<script src="./js/jquery1.7.1.js"></script>

	<script src="./js/jquery.event.swipe.js"></script>

	<script src="./js/jquery.event.move.js"></script>

	<script src="./js/unslider.min.js"></script>

	<style>

	.header{position: relative;}

	</style>

</head>

<body>

<?php include 'block/header.php'?>

<div class="unit workshop">

	<div class="inner">

		<div class="shop w1" id="w1">

			<div class="tips">

				<strong>精纺车间</strong>

				<p>意大利精纺络筒机，<br>日本拼线机、德国倍捻机。现有精纺<br>纱锭8200锭，公司年生产能力为精纺1000吨。</p>

			</div>

		</div>

		<div class="shop w2" id="w2">

			<div class="tips">

				<strong>半精纺车间</strong>

				<p>日本梳棉机、进口细纱机，<br>德国倍捻机。现有半精纺纱锭<br>5000锭，公司年生产能力为半精纺600吨。</p>

			</div>

		</div>

		<div class="shop w3" id="w3">

			<div class="tips">

				<strong>粗纺车间</strong>

				<p>法国粗纱机，意大利走锭机、意大利梳毛机。<br>现有粗纺纱锭3600锭，公司年生产能力为粗纺1000吨</p>

			</div>

		</div>

	</div>

</div>

<?php include 'block/footer.php'?>

<script>

    $('.banner').unslider({

				arrows: true,

				fluid: true,

				dots: true

			});

  </script>

</body>

</html>
