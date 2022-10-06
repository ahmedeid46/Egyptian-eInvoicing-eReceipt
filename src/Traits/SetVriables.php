<?php

namespace Ahmedeid\EInvoiceEg\Traits;

use Illuminate\Support\Facades\Http;


Trait SetVriables
{
    protected $documentTypeID;
    protected $documentTypeVersionID;

    protected $signtoken;

    function login($scope = 'InvoicingAPI'){
        $response = Http::asForm()->post(config('e-invoice-eg.idSrvBaseUrl').'/connect/token',[
            'grant_type'=> 'client_credentials',
            'client_id' => config('e-invoice-eg.clientId'),
            'client_secret' => config('e-invoice-eg.clientSecret'),
            'scope' =>$scope
        ]);
        $signtoken = $response['access_token'];
    }

    public function documentTypeID($documentTypeID){
        $this->documentTypeID = $documentTypeID;
    }
    public function documentTypeVersionID($documentTypeVersionID){
        $this->documentTypeVersionID = $documentTypeVersionID;
    }


}