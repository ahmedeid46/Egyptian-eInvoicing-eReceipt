<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'apiBaseUrl'=>env('API_BASE_URL','https://api.preprod.invoicing.eta.gov.eg'),
    'idSrvBaseUrl'=>env('ID_SRV_BASE_URL','https://id.preprod.eta.gov.eg'),
    'clientId'=>env('CLIENT_ID'),
    'clientSecret'=>env('CLIENT_SECRET'),
];