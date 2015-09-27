<?php


return [
    'class'            => 'yii\swiftmailer\Mailer',
    'useFileTransport' => false,
    'transport'        => [
        'class'    => 'Swift_SmtpTransport',
        'host'     => 'smtp.timeweb.ru',
        'port'     => '25',
        'username' => 'no-reply@galaxysss.ru',
        'password' => 'no-reply1',
    ]
];
