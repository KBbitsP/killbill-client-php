<?php
require_once('H:/GitHub/killbill/master/killbill-client-php/vendor/autoload.php');

use Killbill\Client\KillbillClient;
use Killbill\Client\Swagger\Model\Account;
use Killbill\Client\Swagger\Model\Tenant;

// Setup Killbill client
$client = new KillbillClient(null, 'http://localhost:8080', 'admin', 'password');

// Set these values for your particular tenant
/*$tenant = new Tenant();
$tenant->setApiKey('1stAugphptestkey');
$tenant->setApiSecret('1stAugphptessecret');
$tenant = $client->getTenantApi()->createTenant($tenant, 'pierre', 'PHP_TEST', 'no comment');*/

// Point the client to work with this tenant
$client->setApiKey('5thJunetenantkey');
$client->setApiSecret('5thJunetenantsecret');

// Unique id for this account
/*$externalAccountId = uniqid();

$accountData = new Account();
$accountData->setName('Killbill php test');
$accountData->setExternalKey($externalAccountId);
$accountData->setEmail('test-' . $externalAccountId . '@kill-bill.org');
$accountData->setCurrency('USD');
$accountData->setPaymentMethodId(null);
$accountData->setAddress1('12 rue des ecoles');
$accountData->setAddress2('Poitier');
$accountData->setCompany('Renault');
$accountData->setState('Poitou');
$accountData->setCountry('France');
$accountData->setPhone('81 53 26 56');
$accountData->setFirstNameLength(4);
$accountData->setTimeZone('UTC');

$account = $client->getAccountApi()->createAccount($accountData, 'pierre', 'PHP_TEST', 'no comment');*/

$testaccount = $client->getAccountApi()->getAccount('dd34ddba-3645-41db-bd89-641ca91585e3');

echo $testaccount;