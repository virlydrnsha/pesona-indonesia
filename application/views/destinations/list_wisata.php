<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php $this->load->view('_partials/head.php'); ?>
	<title>Llist of Wisata</title>
</head>
<body>
	<?php $this->load->view('_partials/navbar.php'); ?>

<h1>List Wisata</h1>
<ul>
	<?php foreach($destinations as $destination): ?>
	<li><?= $destination['title'] ?></li>
	<?php endforeach ?>
</ul>

<?php $this->load->view('_partials/footer.php'); ?>
</body>
</html>