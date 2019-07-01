<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo('name')?></title>
	<?php wp_head();?>
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark under-the-wp-nav">
    <a class="navbar-brand" href="#"><?php echo get_bloginfo('name') ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Songs <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<div class="container under-the-nav">