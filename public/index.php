<?php

declare(strict_types=1);

use Framework\App;
use Http\Response;
use GuzzleHttp\Psr7\ServerRequest;

require '../vendor/autoload.php';

$app = new App();

$response = $app->run(ServerRequest::fromGlobals());

Response\send($response);
