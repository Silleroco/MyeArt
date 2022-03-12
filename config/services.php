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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '412778757278176',
        'client_secret' => '36ddf104fce5e308031bea9d407a5f40',
        'redirect' => 'https://myeart.org/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => '545533251001-pspej7ned3mshhrrbcqc96uuvlo86odj.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://myeart.org/auth/google/callback',
    ],
];
