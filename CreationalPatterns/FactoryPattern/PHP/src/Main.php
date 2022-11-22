<?php
require '../vendor/autoload.php';


$new = new \Ssh\FactoryPattern\Platform('Twitter');
echo $new->post();

?>