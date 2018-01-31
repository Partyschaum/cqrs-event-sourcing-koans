#!/usr/bin/env php
<?php

require __DIR__.'/../../../../vendor/autoload.php';

use Partyschaum\Koans\CqrsAndEventSourcing\Infrastructure\Delivery\Console\Command\EchoCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new EchoCommand());
$application->run();
