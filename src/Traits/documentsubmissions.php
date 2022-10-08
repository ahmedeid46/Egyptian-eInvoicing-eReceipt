<?php

namespace Ahmedeid\EInvoiceEg\Traits;

use Illuminate\Support\Facades\Http;


Trait documentsubmissions
{
    protected $issuerAddress = [];
    protected $issuer = [];
    protected $receiverAddress = [];
    protected $receiver = [];
    protected $documentType;
    protected $documentTypeVersion;
    protected $dateTimeIssued;
    protected $taxpayerActivityCode;
    protected $internalID;
    protected $purchaseOrderReference = "";
    protected $purchaseOrderDescription = "";
    protected $salesOrderReference = "";
    protected $proformaInvoiceNumber = "";
    protected $references;
    protected $payment = [];
    protected $delivery = [];
    protected $invoiceLines;
    protected $totalDiscountAmount;
    protected $totalSalesAmount;
    protected $netAmount;
    protected $taxTotals;
    protected $totalAmount;
    protected $extraDiscountAmount;
    protected $totalItemsDiscountAmount;
    protected $signatures;

    function issuerAddress($branchID,$country = "EG",$governate,$regionCity,$street,$buildingNumber,$postalCode="",$floor="",$room="",$landmark="",$additionalInformation=""){
        $this->issuerAddress =  [
            "branchID"              => $branchID,
            "country"               => $country,
            "governate"             => $governate,
            "regionCity"            => $regionCity,
            "street"                => $street,
            "buildingNumber"        => $buildingNumber,
            "postalCode"            => $postalCode,
            "floor"                 => $floor,
            "room"                  => $room,
            "landmark"              => $landmark,
            "additionalInformation" => $additionalInformation
        ];
    }
    function issuerData($type,$id,$name){
        $this->issuer = [
            "address"=>$this->issuerAddress,
            "type" => $type,
            "id" => $id,
            "name"=>$name
        ];
    }
    function receiverAddress($branchID,$country = "EG",$governate,$regionCity,$street,$buildingNumber,$postalCode="",$floor="",$room="",$landmark="",$additionalInformation=""){
        $this->receiverAddress =  [
            "branchID"              => $branchID,
            "country"               => $country,
            "governate"             => $governate,
            "regionCity"            => $regionCity,
            "street"                => $street,
            "buildingNumber"        => $buildingNumber,
            "postalCode"            => $postalCode,
            "floor"                 => $floor,
            "room"                  => $room,
            "landmark"              => $landmark,
            "additionalInformation" => $additionalInformation
        ];
    }
    function receiverData($type,$id,$name){
        $this->receiver = [
            "address"=>$this->receiverAddress,
            "type" => $type,
            "id" => $id,
            "name"=>$name
        ];
    }
    function documentType($documentType){
        $this->documentType = $documentType;
    }
    function documentTypeVersion($documentTypeVersion){
        $this->documentTypeVersion = $documentTypeVersion;
    }
    function dateTimeIssued($dateTimeIssued){
        $this->dateTimeIssued = $dateTimeIssued;
    }
    function internalID($internalID){
        $this->internalID = $internalID;
    }
    function purchaseOrderReference($purchaseOrderReference){
        $this->purchaseOrderReference = $purchaseOrderReference;
    }
    function purchaseOrderDescription($purchaseOrderDescription){
        $this->purchaseOrderDescription = $purchaseOrderDescription;
    }
    function salesOrderReference($salesOrderReference){
        $this->salesOrderReference = $salesOrderReference;
    }
    function salesOrderDescription($salesOrderDescription){
        $this->salesOrderDescription = $salesOrderDescription;
    }
    function proformaInvoiceNumber($proformaInvoiceNumber){
        $this->proformaInvoiceNumber = $proformaInvoiceNumber;
    }
    function references($references){
        $this->references = [$references];
    }
    function payment($bankName = "",$bankAddress="",$bankAccountNo="",$bankAccountIBAN="",$swiftCode="",$terms=""){
        $this->payment = [
            "bankName"        => $bankName,
            "bankAddress"     => $bankAddress,
            "bankAccountNo"   => $bankAccountNo,
            "bankAccountIBAN" => $bankAccountIBAN,
            "swiftCode"       => $swiftCode,
            "terms"           => $terms
        ];
    }
    function delivery ($approach ="",$packaging="",$dateValidity="",$exportPort="",$countryOfOrigin="",$grossWeight="",$netWeight="",$terms=""){
        $this->delivery = [
            "approach"        => $approach,
            "packaging"       => $packaging,
            "dateValidity"    => $dateValidity,
            "exportPort"      => $exportPort,
            "countryOfOrigin" => $countryOfOrigin,
            "grossWeight"     => $grossWeight,
            "netWeight"       => $netWeight,
            "terms"           => $terms
        ];
    }
    function invoiceLines($invoiceLines){
        $this->invoiceLines = $invoiceLines;
    }
    function totalDiscountAmount($totalDiscountAmount){
        $this->totalDiscountAmount = $totalDiscountAmount;
    }
    function totalSalesAmount($totalSalesAmount){
        $this->totalSalesAmount = $totalSalesAmount;
    }
    function netAmount($netAmount){
        $this->netAmount = $netAmount;
    }
    function taxTotals($taxTotals){
        $this->taxTotals = $taxTotals;
    }
    function totalAmount($totalAmount){
        $this->totalAmount = $totalAmount;
    }
    function extraDiscountAmount($extraDiscountAmount){
        $this->extraDiscountAmount = $extraDiscountAmount;
    }
    function totalItemsDiscountAmount($totalItemsDiscountAmount){
        $this->totalItemsDiscountAmount = $totalItemsDiscountAmount;
    }
    function signatures($signatureType,$value){
        $this->signatures = [
            "signatureType" => $signatureType,
            "value"         => $value
        ];
    }
    
}