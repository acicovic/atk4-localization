<?php

use Atk4\Core\TranslatableTrait;
use Atk4\Login\Form;
use Atk4\Login\Model\User;
use Atk4\Ui\App;
use Atk4\Ui\Layout\Admin;
use Atk4\Ui\View;

require 'vendor/autoload.php';

$app = new App(['title' => 'Localization test']);
$app->initLayout([Admin::class]);

$v = View::addTo($app, ['ui' => 'segment']);
$f = Form\Register::addTo($v);
$m = new User($app->db);
$f->setModel($m);