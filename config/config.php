<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'apiBaseUrl'=>env('EG_INV_API_BASE_URL','https://api.preprod.invoicing.eta.gov.eg'),
    'idSrvBaseUrl'=>env('EG_INV_ID_SRV_BASE_URL','https://id.preprod.eta.gov.eg'),
    'clientId'=>env('EG_INV_CLIENT_ID'),
    'clientSecret'=>env('EG_INV_CLIENT_SECRET'),
];