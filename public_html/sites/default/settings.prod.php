<?php

 $settings['trusted_host_patterns'] = [
     '^example\.com$',
     '^.+\.example\.com$',
     '^example\.org$',
     '^.+\.example\.org$',
  ];

  $databases['default']['default'] = array (
    'database' => 'namedb',
    'username' => 'nameuser',
    'password' => '????',
    'prefix' => '',
    'host' => 'localhost',
    'port' => '3306',
    'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
    'driver' => 'mysql',
  );