<html lang="en">
	<?php $this->load->view('_partials/head.php');?>
</head>
<body>
    <header>
        <nav class="navbar">
	        <a href="<?= site_url() ?>">Home</a>
	        <a href="<?= site_url('article') ?>">Category</a>
	        <a href="<?= site_url('page/about') ?>">About</a>
	        <a href="<?= site_url('auth/login') ?>" style="margin-left:auto">Login</a>
        </nav>
    </header>
</body>
<div class="jumbotron">
  <img src="<?php echo base_url('assets/images/pm.jpg'); ?>" alt="Gambar Jumbotron">
</div>

