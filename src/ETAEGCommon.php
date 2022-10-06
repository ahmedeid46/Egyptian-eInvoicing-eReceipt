<?php

namespace Ahmedeid\EInvoiceEg;


use Illuminate\Support\Facades\Http;

class EinvoiceEGCommon
{
    // Build your next great package.
    protected static function login($scope)
    {
        $response = Http::asForm()->post(config('e-invoice-eg.idSrvBaseUrl').'/connect/token',[
            'grant_type'=> 'client_credentials',
            'client_id' => config('e-invoice-eg.clientId'),
            'client_secret' => config('e-invoice-eg.clientSecret'),
            'scope' =>$scope
        ]);
        return $response->object();
    }
}
