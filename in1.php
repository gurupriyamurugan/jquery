<?php
$path_to_file = 'localhost:3000/mi.text';
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("blue",",black",$file_contents);
file_put_contents($path_to_file,$file_contents);
?>