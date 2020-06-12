<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $judul ?></title>
	<link rel="icon" href="<?= base_url('assets/reading-quran.png'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/materialize.min.css'); ?>">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>
	<nav>
		<div class="nav-wrapper teal">
			<a href="<?= base_url() ?>" class="brand-logo"><i class="fas fa-book-open"></i>Al-Quran</a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="<?= base_url('Quran/terjemahan') ?>"><i class="fas fa-search fa-sm"></i> Cari Terjemahan</a></li>
				<li><a href="<?= base_url('Sholat') ?>"><i class="fas fa-calendar-alt fa-sm"></i> Jadwal Sholat</a></li>
				<li><a href="<?= base_url('About') ?>"><i class="fas fa-splotch fa-sm"></i> About</a></li>
			</ul>
		</div>
	</nav>

	<ul class="sidenav" id="mobile-demo">
		<li><a href="<?= base_url('Quran/terjemahan') ?>"><i class="fas fa-search fa-sm"></i> Cari Terjemahan</a></li>
		<li><a href="<?= base_url('Sholat') ?>"><i class="fas fa-calendar-alt fa-sm"></i> Jadwal Sholat</a></li>
		<li><a href="<?= base_url('About') ?>"><i class="fas fa-splotch fa-sm"></i> About</a></li>
	</ul>