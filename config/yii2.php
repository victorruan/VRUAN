<?php
/**
 * Created by PhpStorm.
 * User: victorruan
 * Date: 16/8/9
 * Time: 下午5:28
 */
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
require '../vendor/yiisoft/yii2/Yii.php';
Yii::$app = new yii\web\Application(
    [
        'id'=>'VRUAN_YII',
        'basePath' => dirname(__DIR__),
        'components'=>
            ['db'=>
                [
                    'class' => 'yii\db\Connection',
                    'dsn' => 'mysql:host=mysql;dbname=VRUAN',
                    'username' => 'root',
                    'password' => '123456',
                    'charset' => 'utf8'
                ]
            ]
    ]
);