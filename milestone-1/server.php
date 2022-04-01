<?php

function filterAlbums(array $albums, string $genre): array {
  $arr = [];
  foreach($albums as $album) {
    if ($album['genre'] == $genre) {
      $arr[] = $album;
    }
  }

  return $arr;
}

include_once __DIR__ . '/db.php';

$filter = isset($_GET['genre']) ? $_GET['genre'] : '';

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

if ($filter != '') {
  $albums = filterAlbums($albums, $filter);
}

echo json_encode($albums);