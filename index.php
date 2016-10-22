<?php

require __DIR__ .'/vendor/autoload.php';
use Carbon\Carbon;
use Monolog\Logger;

$logger = new Logger("TEST");
$logger->log(Logger::WARNING, "hello Monolog");

$Berlin = Carbon::now("Europe/Berlin");
$Kiev = Carbon::now("Europe/Kiev");
echo "\nВ Берлине сейчас \n" . $Berlin . "\n";
echo "\nВ Киеве сейчас \n" . $Kiev;
