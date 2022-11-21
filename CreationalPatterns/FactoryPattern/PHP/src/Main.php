<?php
require '../vendor/autoload.php';

use Ssh\FactoryPattern\PostToInstagram;

$postToInstagram = new PostToInstagram();

$postToInstagram->handle();
?>