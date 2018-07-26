<?php

# Includes the autoloader for libraries installed with composer
require __DIR__ . '/vendor/autoload.php';

# Imports the Google Cloud client library
use Google\Cloud\Speech\SpeechClient;
use Google\Cloud\Core\ExponentialBackoff;
use Google\Cloud\Storage\StorageClient;
# Your Google Cloud Platform project ID
$projectId = 'e-no-b7700';
//json credential path
$google_json_credential = 'E-NO-95324430f127.json';
putenv("GOOGLE_APPLICATION_CREDENTIALS=$google_json_credential"); 

# Instantiates a client
$speech = new SpeechClient([
    'projectId' => $projectId,
    'languageCode' => 'fr-CA',
]);

$bucketName="e-no-b7700.appspot.com";
$objectName="longvideo.wav";
 // Fetch the storage object
    $storage = new StorageClient();
    $object = $storage->bucket($bucketName)->object($objectName);


# The name of the audio file to transcribe
//$fileName = "gs://e-no-b7700.appspot.com/E-NO en livestream (1).wav";

# The audio file's encoding and sample rate
$options = [
    'encoding' => 'LINEAR16'
    
];

# Detects speech in the audio file
$operation = $speech->beginRecognizeOperation($object, $options);
// Wait for the operation to complete
    $backoff = new ExponentialBackoff(10);
    $backoff->execute(function () use ($operation) {
        //print('Waiting for operation to complete' . PHP_EOL);
        $operation->reload();
        if (!$operation->isComplete()) {
            throw new Exception('Job has not yet completed', 500);
        }
    });

    // Print the results
    if ($operation->isComplete()) {
        $results = $operation->results();
        foreach ($results as $result) {
            $alternative = $result->alternatives()[0];
            printf('Transcript: %s' . PHP_EOL, $alternative['transcript']);
            printf('<br>');
           // printf('Confidence: %s' . PHP_EOL, $alternative['confidence']);
        }
    }
?>
