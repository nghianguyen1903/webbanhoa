<?php

    'modules' => [],

    'components' => [

        'db'=>[

            'class'=>'yii\db\Connection',

            'dsn' => 'mysql:host=localhost;dbname=flower_user',

            'username' => 'root',

            'password' => '',

            'charset' => 'utf8'           

        ],

        'user' => [

            'identityClass' => 'modules\admin\User',

            'enableAutoLogin' => true,
        ],
