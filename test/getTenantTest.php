<?php
require_once('H:/GitHub/killbill/master/killbill-client-php/vendor/autoload.php');

use Killbill\Client\KillbillClient;
use Killbill\Client\Swagger\Model\Account;
use Killbill\Client\Swagger\Model\Tenant;

// Setup Killbill client
$client = new KillbillClient(null, 'http://localhost:8080', 'admin', 'password');


// Point the client to work with your tenant
$client->setApiKey('5thJunetenantkey');
$client->setApiSecret('5thJunetenantsecret');

$tenantdata = $client->getTenantApi()->getTenantByApiKey('5thJunetenantkey');

echo $tenantdata;