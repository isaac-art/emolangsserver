<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Credentials to use
    |--------------------------------------------------------------------------
    |
    | Here you may define the default service credentials to use
    | for performing API calls to Personality Insights
    |
    */

    'default_credentials' => env('PERSONALITY_INSIGHTS_DEFAULT_CREDENTIALS', 'default'),

    /*
    |--------------------------------------------------------------------------
    | Credentials
    |--------------------------------------------------------------------------
    |
    | Here you may define credentials for your Personality Insights Service
    | you should find them in your Bluemix console. You can define as
    | many credentials as you want
    |
    */

    'credentials' => [

        'default' => [
            'url'      => env('PERSONALITY_INSIGHTS_URL', 'https://gateway.watsonplatform.net/personality-insights/api/'),
            'password' => env('PERSONALITY_INSIGHTS_PASSWORD', 'SomePassword'),
            'username' => env('PERSONALITY_INSIGHTS_USERNAME', 'SomeUsername'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | API version
    |--------------------------------------------------------------------------
    |
    | Here you may specify the Personality Insights API version to use.
    |
    */

    'api_version' => env('PERSONALITY_INSIGHTS_API_VERSION', 'v3'),

    /*
    |--------------------------------------------------------------------------
    | X-Watson-Learning-Opt-Out
    |--------------------------------------------------------------------------
    |
    | By default, Watson collects data from all requests and uses the data
    | to improve the service. If you do not want to share your data,
    | set this value to true.
    |
    */

    'x_watson_learning_opt_out' => false,

    /*
    |--------------------------------------------------------------------------
    | Cache On
    |--------------------------------------------------------------------------
    |
    | Specify if we should cache results from Watson
    |
    */

    'cache_on' => env('PERSONALITY_INSIGHTS_CACHE', false),

    /*
    |--------------------------------------------------------------------------
    | Cache Expiration (in minutes)
    |--------------------------------------------------------------------------
    |
    | How long should the results stay in cache
    |
    */

    'cache_expiration' => 60,
];
