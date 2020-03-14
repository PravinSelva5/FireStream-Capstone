<?php
use Aws\S3\S3Client;
use Aws\CloudFront\CloudFrontClient;

require 'vendor/autoload.php';
$config = require('config.php');

//S3
$s3 = S3Client::factory([
    'key' => $config['s3']['key'],
    'secret'=>$config['s3']['secret'],
    'signature' => 'v4',
    'region'=>'ca-central-1'
]);

// CloudFront
$cloudfront = CloudFrontClient::factory([
    'private_key'=>'pk-APKAIWJRLYIUAJEKNIWQ.pem',
    'key_pair_id'=> 'APKAIWJRLYIUAJEKNIWQ'
]);
