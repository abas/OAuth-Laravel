<?php

return array(
  "driver" => "smtp",
  "host" => "smtp.mailgun.org",
  "port" => env('MAIL_PORT'),
  "from" => array(
      "address" => "No-Reply_OAuth@mail.com",
      "name" => "OAuth-RESET_PASSWORD"
  ),
  'username' => env('MAIL_USERNAME'),
  'password' => env('MAIL_PASSWORD'),
  "sendmail" => "/usr/sbin/sendmail -bs",
  "pretend" => false
);
