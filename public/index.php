<?php
/**
 * Created by PhpStorm.
 * User: victorruan
 * Date: 16/8/9
 * Time: 上午9:47
 */
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
ini_set('date.timezone','Asia/Shanghai');
use Illuminate\Database\Capsule\Manager as Capsule;

require '../vendor/autoload.php';
require '../config/yii2.php';
$capsule = new Capsule;

$capsule->addConnection(require '../config/db.php');

$capsule->bootEloquent();

require '../config/routes.php';