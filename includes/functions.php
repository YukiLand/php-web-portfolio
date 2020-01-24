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


function findPaged($limit, $offset) {
	
	global $photos;
	$selection= [];
	$compteur = 0;
	$compteurOffset = 0;

	foreach ($photos as $picture) {
		$compteurOffset++;

		if ($compteurOffset <= $offset) {
			continue;
		}

		$selection [] = $picture;
		$compteur++;s

		if ($compteur >= $limit) {
			break;
		}
	}
	return $selection;
}

/*function findLatest($limit){
    global $data;

    $i = 0;
    $result = [];
    foreach($data as $key => $value) {
        $date[$key] = $value['date'];
    }
    array_multisort($date, SORT_DESC, $data);
    foreach($data as $photo)
        if($i != $limit){
            $result[] = $photo;
            $i++;
        }
    return $result;
}*/
?>