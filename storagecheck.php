<?php
require __DIR__ . '/vendor/autoload.php';
use Google\Cloud\Storage\StorageClient;

$google_json_credential = 'E-NO-95324430f127.json';
putenv("GOOGLE_APPLICATION_CREDENTIALS=$google_json_credential"); 

//$storage = new StorageClient();
// Providing the Google Cloud project ID.
$storage = new StorageClient([
    'projectId' =>  868290985644
]);
$bucket = $storage->bucket('e-no-b7700.appspot.com');
$object = $bucket->object('my-object');
print_r($object);