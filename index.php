<?php

include 'Router.php';

$routes= [	'/'=>'/homepage.php',
			'/456'=>'/querybuilder.php'];




$adress = new router;

$adress->setting_routes($routes);

$adress->check_route();














?>