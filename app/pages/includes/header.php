<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= ucfirst($URL[0]) ?> - eBook Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= ROOT ?>/assets/css/style.css?67er">
</head>

<body>
	<header>

		<div class="logo-holder">
			<a href="<?= ROOT ?>"><img class="logo" src="<?= ROOT ?>/assets/images/logo.png"></a>
		</div>

		<div class="header-div">
			<div class="main-title">
				<div class="socials">
				</div>
			</div>

			<nav class="nav">
				<div class="nav-item"><a href="<?= ROOT ?>">Home</a></div>
				<div class="nav-item"><a href="<?= ROOT ?>/book">Book</a></div>
				<div class="nav-item dropdown">
					<a href="#">Category</a>

					<?php
					$query = "select * from categories order by category asc";
					$categories = db_query($query);
					?>

					<div class="dropdown-list">

						<?php if (!empty($categories)) : ?>
							<?php foreach ($categories as $cat) : ?>
								<div class="nav-item2"><a href="<?= ROOT ?>/category/<?= $cat['category'] ?>"><?= $cat['category'] ?></a></div>
							<?php endforeach; ?>
						<?php endif; ?>

					</div>
				</div>
				<div class="nav-item"><a href="<?= ROOT ?>/artists">Author</a></div>
				<div class="nav-item"><a href="<?= ROOT ?>/about">About us</a></div>
				<div class="nav-item"><a href="<?= ROOT ?>/contact">Contact us</a></div>

				<?php if (logged_in()) : ?>
					<div class="nav-item dropdown">
						<a href="#">Hi, <?= user('username') ?></a>
						<div class="dropdown-list">
							<div class="nav-item"><a href="<?= ROOT ?>/admin/users/edit/<?= user('id') ?>">Profile</a></div>
							<div class="nav-item"><a href="<?= ROOT ?>/admin">Admin</a></div>
							<div class="nav-item"><a href="<?= ROOT ?>/logout">Logout</a></div>
						</div>
					</div>
				<?php endif; ?>

		</div>
		</nav>

		<div class="search-bar">
			<form action="<?= ROOT ?>/search">
				<div class="form-group search-bar">
					<input class="form-control" type="text" placeholder="Search for book" name="find">
					<button class="btn-search"><i class="fas fa-search"></i></button>
				</div>
			</form>
		</div>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

	</header>