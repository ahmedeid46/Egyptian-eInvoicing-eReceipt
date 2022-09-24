<?php

namespace Ahmedeid\EInvoiceEg;


use Illuminate\Support\Facades\Http;

class EInvoiceEg
{
    // Build your next great package.
    static function login()
    {
        $response = Http::post(config('e-invoice-eg.idSrvBaseUrl').'/connect/token',[
            'client_id' => config('e-invoice-eg.clientId'),
            'client_secret' => config('e-invoice-eg.clientSecret'),
        ]);
        return $response->ok();



    }
}
