<?php
  # $_SERVER SUPERGLOBAL

  // create server array
  $server = [
    'Host server name' => $_SERVER['SERVER_NAME'],
    'host header' => $_SERVER['HTTP_HOST'],
    'server software' => $_SERVER['SERVER_SOFTWARE'],
    'document root' => $_SERVER['DOCUMENT_ROOT'],
  ];

  var_dump($server);
  var_dump($_SERVER);

  // create client array

  var_dump();
