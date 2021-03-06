<?php

namespace Irail\api;

require_once '../../vendor/autoload.php';

use Irail\log\JsonLog;

header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + (1)));//expires in 1 second
header('Cache-Control: max-age=1');//expires in 1 second
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');//allow from every location
$log = new JsonLog(__DIR__ . '/../../storage/irapi.log');
print json_encode($log->getLastEntries(1000));
