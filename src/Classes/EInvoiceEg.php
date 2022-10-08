<?php

namespace Ahmedeid\EInvoiceEg;


use Ahmedeid\EInvoiceEg\Traits\documentsubmissions;
use Ahmedeid\EInvoiceEg\Traits\SetVriables;
use Illuminate\Support\Facades\Http;

class EInvoiceEg
{
    // Build your next great package.
    use documentsubmissions , SetVriables;
    function submitDocuments(){
        $this->login();
        $response = Http::withHeaders([
            'Accept-Language' => 'ar',
            'Content-type' =>'application/json',
            'Authorization'=>$this->signtoken
        ])->get(config('e-invoice-eg.apiBaseUrl').'/api/v1/documenttypes');

        return $response->object();

    }
}
