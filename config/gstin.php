<?php
/**
 * GSTIN Setting & API Credentials
 * Created by Hitesh Varyani <hiteshkv75@gmail.com>.
 */

return [
    'mode'    => env('GSTIN_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'client_id'         => env('GSTIN_SANDBOX_CLIENT_ID', ''),
        'client_secret'     => env('GSTIN_SANDBOX_CLIENT_SECRET', ''),
    ],
    'live' => [
        'client_id'         => env('GSTIN_LIVE_CLIENT_ID', ''),
        'client_secret'     => env('GSTIN_LIVE_CLIENT_SECRET', ''),
        'app_id'            => env('GSTIN_LIVE_APP_ID', ''),
    ],
    'validate_ssl'   => env('GSTIN_VALIDATE_SSL', true), // Validate SSL when creating api client.
];