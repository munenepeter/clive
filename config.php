<?php

return [
  //Get the configuration details ie DB connections
  //when using MYSQL
  'mysql' => [
      'name' => 'clive',
      'username' => '',
      'password' => '',
      'connection' => 'mysql:host=localhost',
      'options' => [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
      ],
  //when using SQLITE
  'sqlite' => [
      'path' => 'Core/Database/sqlite/database.sqlite'
  ],
  //Sending Emails
  'mailtrap' => [
    'host' => 'smtp.mailtrap.io',
    'username' => 'mailtrap_uname', //add a legit one
    'password' => 'mailtrap_pass',
    'SMTPSecure' => 'tls',
    'port' => 2525
  ]

];