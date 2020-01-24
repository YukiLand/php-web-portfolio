<?php
$photos = require('data/gallery.php');

function findOneById($id) {

	global $photos;

	foreach ($photos as $photo) {
		if($id == $photo['id']) {
			return $photo;
		}
	}
	return false;
}

function getCount() {
	global $photos;

	foreach ($photos as $photo) {
		count($photo);
	}
}




?>