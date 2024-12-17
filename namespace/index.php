<?php
require __DIR__ . '/RequestInterface.php';
require __DIR__ . '/Http/Request.php';
require __DIR__ . '/Api/Request.php';

// keyword as -> cara 2
use Api\Request as ApiRequest;
use Http\Request as HttpRequest;

// use Api\Request; -> cara 1
$request = new ApiRequest();
$request->handle();
echo PHP_EOL;

// use Http\Request;
$request = new HttpRequest();
$request->handle();
echo PHP_EOL;


// FQCN (Fully Qualified Class Namespace)
// penyebutan nama class bersamaan dengan namespacenya









?>