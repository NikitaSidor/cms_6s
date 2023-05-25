<?php 

$this->router->add('home', '/', 'HomeController:index'); 
$this->router->add('news', '/news/', 'HomeController:new'); 
$this->router->add('new', '/new/(id:int)', 'HomeController:news'); 
?>