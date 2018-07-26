<?php

# Includes the autoloader for libraries installed with composer
require __DIR__ . '/vendor/autoload.php';

# Imports the Google Cloud client library
use Google\Cloud\Speech\SpeechClient;

# Your Google Cloud Platform project ID
$projectId = 'e-no-b7700';
//json credential path
$google_json_credential = 'E-NO-95324430f127.json';
putenv("GOOGLE_APPLICATION_CREDENTIALS=$google_json_credential"); 
# Instantiates a client
$speech = new Google\Cloud\Speech\SpeechClient([
    'projectId' => $projectId,
    'languageCode' => 'en-US',
]);

# The name of the audio file to transcribe
$fileName = __DIR__ . '/resources/E-NO en livestream (1) (4).wav';

print_r($fileName);
# The audio file's encoding and sample rate
$options = [
    'encoding' => 'LINEAR16',
    'sampleRateHertz' => 16000,
];

# Detects speech in the audio file
$results = $speech->recognize(fopen($fileName, 'r'), $options);
foreach ($results as $result) {
    echo 'Transcription: ' . $result->alternatives()[0]['transcript'] . PHP_EOL;
}
?>
