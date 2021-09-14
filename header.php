<html style="height: 100%;">
	<meta charset="utf-8">
    <title>Władysław Baliuk</title>
    <link rel="stylesheet" type="text/css" href="open/standart.css">
    <link rel="stylesheet" type="text/css" href="open/animate.-all.css">
    <meta charset="UTF-8">
	<head>
		<?php $text = $_GET['file'];?>
	</head>
	<body>
		<? if ($text==""): ?>
			Tekstu niema.
		<? else: ?>
			Władowany tekst: <b><?=$text;?></b>
		<? endif; ?>
		<div style="position: absolute;bottom: 10px;">
			<a href="javascript:history.back();" class=" button8">Do tyłu</a>
		</div>
	</body>
</html>