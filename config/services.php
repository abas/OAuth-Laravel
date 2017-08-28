<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    // OAuth Facebook login
    'facebook' => [
      'client_id' => '113913335984324',
      'client_secret' => '3324e7087615d45b1fc511505445be55',
      'redirect' => 'http://localhost:8000/callback',
    ],

    // google OAuth
    'google' => [
      'client_id' => '825374464340-qu9ufa0et4oovbekvvdm1fo7koh860vs.apps.googleusercontent.com',
      'client_secret' => 'RgAHGEee-aeIWXkSc0PRQA8q',
      'redirect' => 'http://localhost:8000/callback/google',
    ],

];
