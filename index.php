<?php

use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\ServerDumper;
use Symfony\Component\VarDumper\VarDumper;

require_once  'vendor/autoload.php';

VarDumper::setHandler(static function ($var) {
    $cloner = new VarCloner();
    $dumper = new ServerDumper('tcp://127.0.0.1:9912');
    $dumper->dump($cloner->cloneVar($var));
});

dump(time());
