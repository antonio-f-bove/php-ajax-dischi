<?php
include_once __DIR__ . '/db.php';

function filterAlbums(array $albums, string $genre): array {
  $arr = [];

  foreach($albums as $album) {
    if ($album['genre'] == $genre) {
      $arr[] = $album;
    }
  }
  var_dump($arr);

  return $arr;
}


// $filter = array_keys($albums);
$filter = isset($_GET['genre']) ? $_GET['genre'] : '';

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

if ($filter != '' && $filter != "All") {
  
  $arr = [];
  foreach($albums as $album) {
    if ($album['genre'] == $filter) {
      $arr[] = $album;
    }
  }

  echo json_encode($arr);
} else {

  echo json_encode($albums);
}
