<?php

namespace Ahmedeid\EInvoiceEg;


class EInvoiceEg
{
    // Build your next great package.
    function login()
    {
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
            '' => ''
        ];
        $options = [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => 'c6090f59-67ce-4fb5-9bd2-9a3114018577',
                'client_secret' => '6918d8e8-ac41-4072-a848-1237de70bcef',
                'scope' => 'InvoicingAPI'
            ]];
        $request = new Request('POST', 'https://id.preprod.eta.gov.eg/connect/token', $headers);
        $res = $client->sendAsync($request, $options)->wait();
        echo $res->getBody();
    }
}
