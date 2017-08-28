<?php

// return [
//     'driver' => env('MAIL_DRIVER', 'smtp'),
//     'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
//     'port' => env('MAIL_PORT', 587),
//     'from' => [
//         'address' => env('MAIL_FROM_ADDRESS', 'oauth-05f9f4@inbox.mailtrap.io'),
//         'name' => env('MAIL_FROM_NAME', 'oauth'),
//     ],
//
//     'encryption' => env('MAIL_ENCRYPTION', 'tls'),
//     'username' => env('MAIL_USERNAME'),
//     'password' => env('MAIL_PASSWORD'),
//     'sendmail' => '/usr/sbin/sendmail -bs',
//     'pretend' => false,
//     'markdown' => [
//         'theme' => 'default',
//
//         'paths' => [
//             resource_path('views/vendor/mail'),
//         ],
//     ],
//
// ];

return array(
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "5af41d120701e1",
  "password" => "7208fc05eadee8",
  "sendmail" => "/usr/sbin/sendmail -bs",
  "pretend" => false
);
