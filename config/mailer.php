<?php

return [   
        'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
             'class' => 'Swift_SmtpTransport',
             'host' => 'smtp.gmail.com',  // ej. smtp.mandrillapp.com o smtp.gmail.com
             'username' => 'ramonalpe281@gmail.com',
             'password' => 'Curso#2020',
             'port' => '465', // El puerto 25 es un puerto común también
             'encryption' => 'ssl', // Es usado también a menudo, revise la configuración del servidor
                 'streamOptions' => [ 'ssl' =>
                [ 'allow_self_signed' => true,
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
            ]
         ],
];
