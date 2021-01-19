<?php
include 'apipeliculas.php';
$api = new ApiPeliculas();
$api->getAll();
?>