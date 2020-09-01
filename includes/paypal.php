<?php

require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost:8888/gdlwebcamp');

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ATKgBQjlq4YUAJPsmwEHte8LhpuSjOfHjzCO-SmWoUgzTwizAS558GsrQKQqgJpgH4yjwHBLWHImncSt', // Cliente ID
        'EO4tdiZB1Qt6y2skCQ34PWWFdC9RKYfQ1Kok2MFWYt9IohBhKFTPapWGYyhVxObtl7pMTIzmuRGg1mOS' // Secret
    )
);

