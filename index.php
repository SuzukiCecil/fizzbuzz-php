<?php
declare(strict_types=1);

require __DIR__.'/app/bootstrap.php';

require __DIR__.'/app/Controller.php';

$Controller = new Controller();
$Controller->index();