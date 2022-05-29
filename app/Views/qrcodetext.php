<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short URL</title>
</head>
<body>
<?= $this->extend('layout/frontend'); ?>

<?= $this->section('link'); ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col text-center">
			<h1>QRcode</h1>
			<img src="data:image/png;base64,<?= $qrcode  ?>" alt="">
		</div>
		<div class="col text-center">
			<h1>Barcode</h1>
			<img src="data:image/png;base64,<?= $barcode  ?>" alt="">
		</div>
	</div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<?= $this->endSection(); ?>
</body>
</html>