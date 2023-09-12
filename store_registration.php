</php 

$album = [
    "title" => $_POST["title"],
    "author" => $_POST["author"],
    "year" => $_POST["year"],
    "poster" => $_POST["poster"],
    "genre" => $_POST["genre"],
];

// $string = file_get_contents(__DIR__ . "/db/album.json");
// $album = json_decode($string, true);
$album =json_decoded(file_get_contents(__DIR__ . "/db/album.json"), true);

$album[] = $album;

$album["title"] = "new title";

echo "<pre><code>";
var_dump($album);
echo "</code></pre>";

$string = json_encode($album, JSON_PRETTY_PRINT);

file_put_contents(__DIR__ . "/db/album.json", $string);