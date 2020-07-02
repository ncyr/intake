<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = Mailgun::create('PRIVATE_API_KEY', 'https://API_HOSTNAME');
$domain = "YOUR_DOMAIN_NAME";
$params = array(
  'from'    => 'Excited User <YOU@YOUR_DOMAIN_NAME>',
  'to'      => 'bob@example.com',
  'subject' => 'Hello',
  'text'    => 'Testing some Mailgun awesomness!'
);

# Make the call to the client.
$mg->messages()->send($domain, $params);
?>