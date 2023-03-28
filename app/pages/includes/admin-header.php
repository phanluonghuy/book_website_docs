<!DOCTYPE html>
<html lang="en">

<head>
	<title>Book Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= ROOT ?>/assets/css/style.css?52423">
</head>

<body>
	<style>


	</style>
	<header>
		<div class="logo-holder">
			<a href="<?= ROOT ?>"><img class="logo" src="<?= ROOT ?>/assets/images/logo.png"></a>
		</div>
		<div class="header-div">

		</div>
		<div class="nav">
			<div class="nav-item"><a href="<?= ROOT ?>/admin">Dashboard</a></div>
			<div class="nav-item"><a href="<?= ROOT ?>/admin/users">Users</a></div>
			<div class="nav-item"><a href="<?= ROOT ?>/admin/books">Books</a></div>
			<div class="nav-item"><a href="<?= ROOT ?>/admin/categories">Categories</a></div>
			<div class="nav-item"><a href="<?= ROOT ?>/admin/artists">Artists</a></div>
			<div class="nav-item dropdown">
				<a href="#">Hi, <?= user('username') ?></a>
				<div class="dropdown-list">
					<div class="nav-item"><a href="<?= ROOT ?>/profile">Profile</a></div>
					<div class="nav-item"><a href="<?= ROOT ?>">Website</a></div>
					<div class="nav-item"><a href="<?= ROOT ?>/logout">Logout</a></div>
				</div>
			</div>
		</div>
		</div>
	</header>

	<?php if (message()) : ?>
		<div class="alert"><?= message('', true) ?></div>
	<?php endif; ?>