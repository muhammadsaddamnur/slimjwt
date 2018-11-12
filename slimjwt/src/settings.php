<?php
return [
  'settings' => [
    'displayErrorDetails' => true, // set to false in production
    'addContentLengthHeader' => false, // Allow the web server to send the content-length header

    // jwt settings
    "jwt" => [
      'secret' => 'supersecretkeyyoushouldnotcommittogithub'
    ],

    //database connection details
    "db" => [
      "host" => "localhost",
      "dbname" => "slimJWT",
      "user" => "root",
      "pass" => ""
    ],

    // Renderer settings
    'renderer' => [
      'template_path' => __DIR__ . '/../templates/',
    ],

    // Monolog settings
    'logger' => [
      'name' => 'slim-app',
      'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
      'level' => \Monolog\Logger::DEBUG,
    ],
  ],
];