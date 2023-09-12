<?php

$string = file_get_contents("./db/album.json");

$album = json_decode($string, true);

echo "<pre><code>";
var_dump($album);
echo "</code></pre>";