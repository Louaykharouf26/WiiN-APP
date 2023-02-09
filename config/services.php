<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '607186944494-ng4c5agtdl8jpnb4v63h3hmdd18k29oq.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/callback/google',
      ], 
       'facebook' => [
    'client_id' => '1252125875619788',
    'client_secret' => 'c6ba1727bea9e77fd87747107fd943a2',
    'redirect' => 'https://127.0.0.1:8000/callback/facebook',
  ],

];
