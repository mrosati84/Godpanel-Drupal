<?php

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../../');
$dotenv->load();

$databases = array();
$config_directories = array();

$settings['hash_salt'] = getenv('HASH_SALT');
$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$databases['default']['default'] = array (
  'database' => getenv('DB_NAME'),
  'username' => getenv('DB_USER'),
  'password' => getenv('DB_PASS'),
  'host' => getenv('DB_HOST'),
  'port' => getenv('DB_PORT'),
  'driver' => getenv('DB_DRIVER'),
  'prefix' => '',
  'collation' => 'utf8mb4_general_ci',
);

$settings['install_profile'] = 'godpanel_profile';
$config_directories['sync'] = __DIR__ . '/../../config/sync';

$settings['trusted_host_patterns'] = array(
  '^localhost$',
  '^godpanel\.mrosati\.it$',
);

if (getenv('DEBUG')) {
  if (file_exists(__DIR__ . '/settings.debug.php')) {
    include __DIR__ . '/settings.debug.php';
  }
}

