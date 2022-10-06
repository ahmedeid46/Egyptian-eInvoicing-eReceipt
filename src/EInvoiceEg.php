<?php

namespace Ahmedeid\EInvoiceEg;


use Illuminate\Support\Facades\Http;

class EInvoiceEg
{
    // Build your next great package.
    
    protected $signtoken = '';
    function __construct($scope)
    {
        $response = Http::asForm()->post(config('e-invoice-eg.idSrvBaseUrl').'/connect/token',[
            'grant_type'=> 'client_credentials',
            'client_id' => config('e-invoice-eg.clientId'),
            'client_secret' => config('e-invoice-eg.clientSecret'),
            'scope' =>$scope
        ]);
        $signtoken = $response['token'];
    }
    static function getDocumentTypes(){
        $auth = new EInvoiceEg('InvoicingAPI');
        $response = Http::withHeaders([
            'Accept-Language' => 'ar',
            'Content-type' =>'application/json',
            'Authorization'=>$auth->signtoken
        ])->get(config('e-invoice-eg.apiBaseUrl').'/api/v1/documenttypes');
        
        return $response->object();
    }
    static function getDocumenttype($document_id){
        $auth = new EInvoiceEg('InvoicingAPI');
        $response = Http::withHeaders([
            'Accept-Language' => 'ar',
            'Content-type' =>'application/json',
            'Authorization'=>$auth->signtoken
        ])->get(config('e-invoice-eg.apiBaseUrl').'/api/v1.0/documenttypes/'.$id);

        return $response->object();
    }
    static function getDocumentTypeVersion($document_id,$version_id){
        $auth = new EInvoiceEg('InvoicingAPI');
        $response = Http::withHeaders([
            'Accept-Language' => 'ar',
            'Content-type' =>'application/json',
            'Authorization'=>$auth->signtoken
        ])->get(config('e-invoice-eg.apiBaseUrl').'/api/v1.0/documenttypes/'.$document_id.'/versions/'.$version_id);
        return $response->object();
    }

}
