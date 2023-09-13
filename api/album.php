<?php

$album = file_get_contents(__DIR__ . "/../db/album.json");

header("Content-Type: application/json");

echo $album;

?>