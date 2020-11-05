<?php require_once('../vendor/autoload.php');

use Kojo\App;

$app = App::factory();

$app->route('/', function() {
    return 'Hello World';
});

$app->run();
