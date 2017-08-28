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
  "host" => "smtp.mailgun.org",
  "port" => 587,
  "from" => array(
      "address" => "No-Reply_OAuth@mail.com",
      "name" => "OAuth-RESET_PASSWORD"
  ),
  "username" => "postmaster@sandboxf1d2718da8474ae19bf338a7941b8585.mailgun.org",
  "password" => "jhagbuyetbiwqu3t728",
  "sendmail" => "/usr/sbin/sendmail -bs",
  "pretend" => false
);
