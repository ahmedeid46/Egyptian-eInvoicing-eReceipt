<?php

namespace Ahmedeid\EInvoiceEg\Classes;


use Illuminate\Support\Facades\Http;
use SetVriable;


class ETGEGCommon
{
    // Build your next great package.
    use SetVriable;
    public function getDocumentTypes(){
        $this->login();
        $response = Http::withHeaders([
            'Accept-Language' => 'ar',
            'Content-type' =>'application/json',
            'Authorization'=>$this->signtoken
        ])->get(config('e-invoice-eg.apiBaseUrl').'/api/v1/documenttypes');
        
        return $response->object();
    }
    public function getDocumenttype(){
        $this->login();
        $response = Http::withHeaders([
            'Accept-Language' => 'ar',
            'Content-type' =>'application/json',
            'Authorization'=>$this->signtoken
        ])->get(config('e-invoice-eg.apiBaseUrl').'/api/v1.0/documenttypes/'.$this->documentTypeID);

        return $response->object();
    }
    public function getDocumentTypeVersion(){
        $this->login();
        $response = Http::withHeaders([
            'Accept-Language' => 'ar',
            'Content-type' =>'application/json',
            'Authorization'=>$this->signtoken
        ])->get(config('e-invoice-eg.apiBaseUrl').'/api/v1.0/documenttypes/'.$this->documentTypeID.'/versions/'.$this->documentTypeID);
        return $response->object();
    }
}
