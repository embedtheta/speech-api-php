<?php
require __DIR__ . '/vendor/autoload.php';
use Google\Cloud\Storage\StorageClient;

$google_json_credential = '';
putenv("GOOGLE_APPLICATION_CREDENTIALS=$google_json_credential"); 

//$storage = new StorageClient();
// Providing the Google Cloud project ID.
$storage = new StorageClient([
    'projectId' =>  
]);
$bucket = $storage->bucket('');
$object = $bucket->object('my-object');
print_r($object);