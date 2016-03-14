<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('mvc_module_homepage', new Route('/hello/{name}', array(
    '_controller' => 'MVCModuleBundle:Default:index',
)));

return $collection;
