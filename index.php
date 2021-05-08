<?php 

	require_once('autoload.php');

	use App\Models\BookShelf;

	// Just playing arroud
	$bs = new BookShelf();

	print_r($bs->getShelfStatus());
?>