<?php
$str = file_get_contents('./comics.json');
$json = json_decode($str, true);
$comics = $json['comics'];
$comicname = $json['comic'.$comics];
?>