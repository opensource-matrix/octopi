<?php
require 'lib/Framework/Core.php';
  
$request = Request::createFromGlobals();

// Our framework is now handling itself the request
$app = new Framework\Core();

$response = $app->handle($request);
$response->send();