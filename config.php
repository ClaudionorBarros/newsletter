<?php
$cfg = array(

  ###### site settings #####

  'site_name'           => 'My Website',
  'address'             => 'My geographic address, 45/bis',
  
  // paths
  'site_url'            => 'www.example.com',
  'site_full_url'       => 'http://example.com', # without a trailing slash
  'site_root'           => '/',

  // application path
  'root'                => '/newsletter/',

  // relative path to your company logo  
  'logo'                => 'assets/images/header.jpg',


  ##### mail settings #####

  // This is the mail that your users will see.
  'from_name'           => 'Sender name',
  'from'                => 'no-reply@example.com', # mittente (no-reply)
  
  // This is the mail your users will reply to.
  'reply_to_name'       => 'Recipient name',
  'reply_to'            => 'info@example.com',
  
  // You must authenticate to your mail server.
  // However you definitely can use a different mail
  // for your campaign, even a fictitious one.
  'mail' => array(
    'username'  => 'info@example.com',
    'password' => 'secret'),

  'smtp_server' => array(
    'main'   => 'smtp1.example.com',
    'backup' => 'smtp2.example.com'),
  
  /* Please enter your database authentication data.
  ** You can separate your production environment
  ** from your development environment: just uncomment
  ** the data you need (put a slash at the beginning).
  **/

  //* production database settings
  'hostname'            => '127.0.0.1',
  'dbname'              => 'dbname',
  'username'            => 'root',
  'password'            => '',
  //*/
  
  /* test database settings
  'hostname'            => 'localhost',
  'dbname'              => 'newsletter',
  'username'            => 'root',
  'password'            => '',
  //*/
  
  
  ##### miscellaneous #####
  // Usually you don't need to modify the fields below,
  // but feel free to do so. Just make sure you know
  // what you are doing.

  'language'            => 'en', # set to 'it' for italian language
  'regex'               => '^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$^',
  'limit'               => 300, # emails to send before refreshing the send.php page
  'word_wrap'           => 50,
  'timeout'             => 10000, # refresh timeout, in milliseconds.
  'debug_mode'          => 0, # enables SMTP debug information (2 for testing)
  'smtp_auth'           => true,
  'charset'             => 'UTF-8',
  'max_allowed_fails'   => 5,
  'unsubscribe_url'     => 'unsubscribe.php',
  'online_version_url'  => 'view.php',  
);
