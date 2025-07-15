<?php

return [
    'enabled' => true,
    'default_currency' => 'EUR',
    'issuer' => [
        'name' => env('VERIFACTU_ISSUER_NAME', ''),
        'vat' => env('VERIFACTU_ISSUER_VAT', ''),
    ],
    // Otros parámetros de configuración...
]; 