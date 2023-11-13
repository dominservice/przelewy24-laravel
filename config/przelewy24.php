<?php

return [

    'merchant_id' => env('PRZELEWY24_MERCHANT_ID'),
    'reports_key' => env('PRZELEWY24_REPORTS_KEY'),
    'crc' => env('PRZELEWY24_CRC'),
    'pos_id' => env('PRZELEWY24_POS_ID'),
    'sandbox_merchant_id' => env('PRZELEWY24_SANDBOX_MERCHANT_ID'),
    'sandbox_reports_key' => env('PRZELEWY24_SANDBOX_REPORTS_KEY'),
    'sandbox_crc' => env('PRZELEWY24_SANDBOX_CRC'),
    'sandbox_pos_id' => env('PRZELEWY24_SANDBOX_POS_ID'),

    'is_live' => (bool) env('PRZELEWY24_IS_LIVE', false),
];
