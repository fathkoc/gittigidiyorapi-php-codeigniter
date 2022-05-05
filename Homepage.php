<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends Veripay_Controller
{
    function __construct()
    {
        parent:: __construct();

        $this->load->model($this->router->fetch_class() . '_model', 'model');
        if (extension_loaded("soap")) {
            echo "SOAP kurulu.";
        } else {
            echo "SOAP kurulu değil.";
        }


    }

    public function kategori()
    {
        $params = ['startOffSet' => 0, 'rowCount' => 4, 'withSpecs' => true, 'withDeepest' => true, 'withCatalog' => true, 'lang' => 'tr'];

        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getCategories', $params);
        prex($result);
    }

    public function getApplicationList()
    {
        $params = ['developerId' => 'jz3gpHJbrmYDGDXsAVBH'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/ApplicationService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getApplicationList', $params);
        prex($result);
    }

    public function getModifiedCategories()
    {
        $params = ['changeTime' => 1284163200000, 'startOffSet' => 0, 'rowCount' => 5, 'lang' => 'tr'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getModifiedCategories', $params);
        prex($result);
    }

    public function getCategory()
    {
        $params = ['categoryCode' => 'fbb', 'withSpecs' => true, 'withDeepest' => true, 'withCatalog' => true, 'lang' => 'tr'];  //categoryCode= istediğiniz kategori kodu gelcek
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getCategory', $params);
        prex($result);
    }

    public function getCategorySpecs()
    {
        $params = ['categoryCode' => 'az', 'lang' => 'tr'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getCategorySpecs', $params);
        prex($result);
    }

    public function getDeepestCategories()
    {
        $params = ['startOffSet' => 0, 'rowCount' => 1, 'withSpecs' => true, 'lang' => 'tr'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getDeepestCategories', $params);
        prex($result);
    }

    public function getCategoriesByCodes()
    {
        $params = ['categoryCodes' => ['item' => 'a'], 'withSpecs' => true, 'withDeepest' => true, 'withCatalog' => true, 'lang' => 'tr'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getCategoriesByCodes', $params);
        prex($result);
    }

    public function getCategoryVariantSpecs()
    {
        $params = ['categoryCode' => 'ebec', 'lang' => 'tr'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getCategoryVariantSpecs', $params);
        prex($result);
    }

    public function getRequiredCategorySpecs()
    {
        $params = ['categoryCode' => 'ngv', 'lang' => 'tr'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryV2Service?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getRequiredCategorySpecs', $params);
        prex($result);
    }

    public function getCategorySpecsWithDetail()
    {
        $params = ['categoryCode' => 'upf', 'lang' => 'tr'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getCategorySpecsWithDetail', $params);
        prex($result);
    }

    public function getCategoriesHavingVariantSpecs()
    {
        $params = ['lang' => 'tr'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getCategoriesHavingVariantSpecs', $params);
        prex($result);
    }

    public function getParentCategories()
    {
        $params = ['categoryCode' => 'upf', 'lang' => 'tr'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getParentCategories', $params);
        prex($result);
    }

    public function getSubCategories()
    {
        $params = ['categoryCode' => 1, 'withSpecs' => false, 'withDeepest' => false, 'withCatalog' => false, 'lang' => 'tr'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CategoryService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getSubCategories', $params);
        prex($result);
    }

    public function getCities()
    {
        $params = ['startOffSet' => 0, 'rowCount' => 83, 'lang' => 'tr'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CityService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getCities', $params);
        prex($result);
    }

    public function getModifiedCities()
    {
        $params = ['changeTime' => 1284163200000, 'startOffSet' => 0, 'rowCount' => 10, 'lang' => 'tr'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CityService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getModifiedCities', $params);
        prex($result);
    }

    public function getCity()
    {
        $params = ['code' => 55, 'lang' => 'tr'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CityService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getCity', $params);
        prex($result);
    }

    public function getCitiesByCodes()
    {
        $params = ['codes' => ['item' => 55, 'item' => 34], 'lang' => 'tr'];
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CityService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getCitiesByCodes', $params);
        prex($result);
    }

    public function searchCatalog()
    {
        $params = ['page' => 1, 'rowCount' => 40, 'criteria' => ['keyword' => 'kırmızı', 'categoryCode' => 'ngv'], 'lang' => 'tr'];
        $apiKey = 'GeDZpw7dVZBtv3d4ahjYRFut34KUhTqx';
        $secretKey = 'jKsKbqZMjGng5yHB';
        $auth_user = 'sanlisaat';
        $auth_pass = 'gcYZRf2vB5gpahdRcMbgPftGH4UHGcv3';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/CatalogV2Service?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('searchCatalog', $params);
        prex($result);
    }

    public function search()
    {
        $params = ['keyword' => 'arancakkelime', 'criteria' => ['format' => 'F', 'freeShipping' => false, 'startFromOneTL' => false, 'catalogOption' => true, 'newProduct' => false, 'minPrice' => 50, 'maxPrice' => 90, 'city' => 55, 'runOutItems' => 24, 'seller' => 'magicway', 'categoryCode' => 1, 'catalogId' => 2, 'categorySpecs' => ['name' => 'markalar', 'value' => 'Tommy Hilfiger']], 'startOffSet' => 0, 'rowCount' => 5, 'includeDescription' => false, 'withData' => true, 'orderBy' => 'P', 'lang' => 'tr'];
        $apiKey = 'GeDZpw7dVZBtv3d4ahjYRFut34KUhTqx';
        $secretKey = 'jKsKbqZMjGng5yHB';
        $auth_user = 'sanlisaat';
        $auth_pass = 'gcYZRf2vB5gpahdRcMbgPftGH4UHGcv3';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = $apiKey . $secretKey . $time;


        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/SearchService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('search', $params);
        prex($result);
    }

    //////////-------------------KURUMSAL-------------------------------------
    public function getBalances()
    {

        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'lang' => 'tr', 'balanceRequest' => ['startDate' => 03 / 04 / 2022, 'endDate' => 04 / 04 / 2022, 'pageNumber' => 2, 'pageSize' => 1, 'balanceTransferStatus' => 'COMPLETED']];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualAccountingService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getBalances', $params);
        prex($result);

    }

    public function getDebtCollection()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'lang' => 'tr', 'queryDebtCollectionRequest' => ['balanceCode' => 'SELLER-BC-f3a42b0b-e8c9-4798-b1be-37559439b029', 'pageNumber' => 1, 'pageSize' => 4]];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualAccountingService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getDebtCollection', $params);
        prex($result);

    }

    public function getSrsProcessSaleItem()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'productId' => 32351190, 'lang' => 'tr', 'srsProcessSaleItemRequest' => ['balanceCode' => 'SELLER-BC-f3a42b0b-e8c9-4798-b1be-37559439b029', 'pageNumber' => 1, 'pageSize' => 5]];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualAccountingService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getSrsProcessSaleItem', $params);
        prex($result);
    }

    public function getSrsProcessDetailsSaleItem()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'startOffSet' => 0, 'lang' => 'tr', 'srsProcessDetailsRequest' => ['memberId' => 9717156, 'pageNumber' => 1, 'pageSize' => 2, 'saleCodes' => SCSRS2800020]];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualAccountingService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getSrsProcessDetailsSaleItem', $params);
        prex($result);


    }

    public function getNewlyListedProductIdList()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'startOffSet' => 0, 'rowCount' => 5, 'viaApi' => true, 'lang' => 'tr',];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getNewlyListedProductIdList', $params);
        prex($result);
    }


    public function getProduct()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params=['apiKey'=>$apiKey,'sign'=>$sign,'time'=>$time,'productId'=>'32351190','itemId'=>'118500','lang'=>'tr'];
        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getProduct', $params);
        prex($result);
    }

    public function getProducts()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'startOffSet' => 0, 'rowCount' => 5, 'status' => 'L', 'withData' => true, 'lang' => 'tr',];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getProducts', $params);
        prex($result);
    }

    public function getProductsByIds()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'productIdList' => ['item' => 541526402], 'itemIdList' => 1, 'withData' => true, 'lang' => 'tr',];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getProductsByIds', $params);
        prex($result);
    }

    public function getProductStatuses()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'productIdList' => ['item' => 541526402], 'itemIdList' => 1, 'lang' => 'tr',];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getProductStatuses', $params);
        prex($result);
    }

    public function getItemIdDetails()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'productIds' => ['item' => 541526402], 'lang' => 'tr',];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getItemIdDetails', $params);
        prex($result);
    }

    public function getPagedSales()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'withData' => false, 'byStatus' => 'R', 'byUser', 'orderBy' => 'A', 'pageNumber' => 1, 'pageSize' => 10, 'lang' => 'tr',];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualSaleService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getPagedSales', $params);
        prex($result);
    }

    public function getSale()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'saleCode' => 12313, 'lang' => 'tr',];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualSaleService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getSale', $params);
        prex($result);
    }

    public function getSalesByDateRange()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'withData' => true, 'byStatus' => 'R', 'byUser' => $auth_user, 'orderBy' => 'P', 'orderType' => 'A', 'startDate' => '01/09/2021 00:00:00', 'endDate' => '30/09/2021 23:59:00', 'pageNumber' => 1, 'pageSize' => 1, 'lang' => 'tr',];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualSaleService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getSalesByDateRange', $params);
        prex($result);
    }

    public function getAccountTransactionsV3()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'startDate' => 2020 - 03 - 29, 'endDate' => 2020 - 04 - 3, 'startOffSet' => 0, 'rowCount' => 4, 'lang' => 'tr',];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualSaleService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getAccountTransactionsV3', $params);
        prex($result);
    }

    public function getSaleProcessReportV2()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'startDate' => 2020 - 03 - 29, 'endDate' => 2020 - 04 - 3, 'startOffSet' => 0, 'rowCount' => 4, 'lang' => 'tr',];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualSaleService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getSaleProcessReportV2', $params);
        prex($result);
    }

    public function getItemBuyers()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'byStatus' => 'S', 'startOffSet' => 0, 'rowCount' => 4, 'lang' => 'tr',];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualSaleService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getItemBuyers', $params);
        prex($result);
    }

    public function getConversations()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'getConversationsRequest' => ['startOffSet' => 0, 'rowCount' => 4, 'messageType' => 'ALL', 'filteredUserNick' => 213, 'lang' => 'tr']];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualUserConversationService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getConversations', $params);
        prex($result);
    }

    public function getConversationsCount()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'getConversationsRequest' => ['type' => 'SYSTEM', 'unread' => 5, 'lang' => 'tr']];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualUserConversationService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getConversationsCount', $params);
        prex($result);
    }

    public function getMessages()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'getMessagesRequest' => ['conversationId' => '5ea975ad99b3810001892e12', 'rowCount' => 5, 'startOffset' => 0, 'lang' => 'tr']];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualUserConversationService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getMessages', $params);
        prex($result);
    }

    public function getConversationById()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'getConversationByIdRequest' => ['conversationId' => '5ea975ad99b3810001892e12', 'lang' => 'tr']];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualUserConversationService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getConversationById', $params);
        prex($result);
    }

    public function getCargoInformation()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'saleCode' => 219368500001, 'lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualCargoService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getCargoInformation', $params);
        prex($result);
    }

    public function getCargoCompany()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualCargoService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getCargoCompany', $params);
        prex($result);
    }

    public function getShippingRequest()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'lang' => 'tr', 'saleCode' => 'SC112269361'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualCargoService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getShippingRequest', $params);
        prex($result);
    }

    public function getUserShippingAgreements()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualCargoService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getUserShippingAgreements', $params);
        prex($result);
    }

    public function getShippingAgreementContent()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualCargoService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getShippingAgreementContent', $params);
        prex($result);
    }

    public function getUnsoldItems()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'startOffSet' => 0, 'rowCount' => 5, 'withData' => true, 'lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualActivityService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getUnsoldItems', $params);
        prex($result);
    }

    public function getSoldItems()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'startOffSet' => 0, 'rowCount' => 5, 'withData' => true, 'lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualActivityService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getSoldItems', $params);
        prex($result);
    }

    public function getWatchItems()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'startOffSet' => 0, 'rowCount' => 5, 'withData' => true, 'lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualActivityService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getWatchItems', $params);
        prex($result);
    }

    public function getStore()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time, 'lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualStoreService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('getStore', $params);
        prex($result);
    }

    public function insertAndActivateProduct()
    {
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";
        $params = ['apiKey' => $apiKey,
                    'sign' => $sign,
                    'time' => $time,
                    'itemId' => '1273812wwsawwwsd',
                    'product' => ['categoryCode' => 'az', 'storeCategoryId' =>'fbb', 'title' => 'berkannsssadn',
                    'subtitle' => 'satlıkkmontıromarkası',
                    'specs' =>[
                                'spec'=>[
                                    ['name' => 'Durum','value'=>'Sıfır','type' => 'Combo','required' =>'true'],
                                    ['name' => 'Kondisyon','value'=>'Yüksek','type' => 'Combo','required' =>'true']
                                 ]

                                ],
                     'photos' => ['photo' => ['photoId'=>0,'url' => 'https://www.teknoblog.com/wp-content/uploads/2020/11/google-fotograflar-in-bazi-duzenleme-araclari-icin-parali-olacak-isareti.jpg']],
                     'pageTemplate' => 1, 'description' => 'sssssatılırrrrrrherşey satıozsss',
                    'startDate' => 3 / 03 / 2022, 'catalogId' => 2,
                    'catalogDetail' => 0, 'catalogFilter' => false, 'format' => 'S',
                    'startPrice' => 20, 'buyNowPrice' => 24000, 'netEarning' => 0, 'listingDays' => 30,
                    'productCount' => 1, 'cargoDetail' =>['city'=>55,'shippingPayment'=>'B','shippingWhere'=>'city','cargoCompanyDetails'=>['cargoCompanyDetail'=>
                        ['name'=>'aras','cityPrice'=>3.00,'countryPrice'=>'']],'shippingTime'=>['days'=>'tomorrow','beforeTime'=>13.15]],'affiliateOption'=>false,
                        'boldOption'=>false,'catalogOption'=>false,'vitrineOption'=>false,'globalTradeItemNo'=>12345678,'manufacturerPartNo'=>'GO12345OOGLE'],'forceToSpecEntry'=>false,'nextDateOption'=>false,'lang'=>'tr',];
         //prex($params);
        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('insertAndActivateProduct', $params);
        prex($result);
    }
    //guncellemeler----------------------------------------------------
    public function updateStock(){
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time,'productId'=>'775798849','itemId'=>'1273812sawwwsd','stock'=>'30','cancelBid'=>false, 'lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('updateStock', $params);
        prex($result);
    }
    public function updatePrice(){
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time,'productId'=>'775718075','itemId'=>'kodakss_pdp_775718075','price'=>'1000.80','cancelBid'=>true, 'lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('updatePrice', $params);
        prex($result);
    }
    public function updateVariantStock(){
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time,'productId'=>'775718075','itemId'=>'kodakss_pdp_775718075','variantId'=>'1000.80','stock'=>'20', 'lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('updateVariantStock', $params);
        prex($result);
    }
    public function updatePriceByPercentage(){
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time,'productId'=>'775718075','itemId'=>'kodakss_pdp_775718075','operatorType'=>'+','percentage'=>50, 'lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('updatePriceByPercentage', $params);
        prex($result);
    }
   /* public function updateProductWithNewCargoDetail(){
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time,'productId'=>'775718075','itemId'=>'kodakss_pdp_775718075','operatorType'=>'+','percentage'=>50, 'lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('updateProductWithNewCargoDetail', $params);
        prex($result);
    }
   */
    public function updateItemId(){
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time,'productId'=>'775718075','itemId'=>'kodakss_pdp_775718075','lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('updateItemId', $params);
        prex($result);
    }
    public function updateProductSales(){
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time,'productUpdateSales'=>['item'=>['productId'=>'775718075','price'=>'3000.60','quantity'=>'180','updatedSaleFields'=>['field'=>['price','quantity']]]],'lang' => 'tr'];

        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('updateProductSales', $params);
        prex($result);
    }
    public function insertProductWithNewCargoDetail(){
        $apiKey = 'j66Qm6tafu9Deaa5CtU8qemTK2kNuFZj';
        $secretKey = 'cYqgAY24dY8YsJKN';
        $auth_user = 'smhgndz61';
        $auth_pass = 'BzbQ88zkkZDCF666WaJe2g5AqUPUEaAY';
        list($usec, $sec) = explode(" ", microtime());
        $time = round(((float)$usec + (float)$sec) * 100) . '0';
        $sign = md5($apiKey . $secretKey . $time);
        $params = ['apiKey' => $apiKey, 'sign' => $sign, 'time' => $time,'itemId'=>'10gdk','product'=>[
            'categoryCode'=>'gdk','storeCategoryId'=>'ad','title'=>'Kodak Z915 12MP','subtitle'=>'sdasa','specs'=>[
                'spec'=>['name'=>'DURUMU','value'=>'KULLANILMIS','type'=>'Combo','required'=>true]
            ],'photos'=>['photoId'=>0,'url'=>'http://images.gittigidiyor.com/2941/KODAK-Z915-10MP-10X-ZOOM-HD-SIFIR-URUN__29416457_0.jpg'],
            'pageTemplate'=>1,'description'=>'Kodak Z915 Fotograf Makinesi 10Mp ','startDate'=>2,'catalogId'=>1,'catalogDetail'=>'ada','catalogFilter'=>'F','format'=>'S','startPrice'=>1221,'buyNowPrice'=>1321,'netEarning'=>2,'listingDays'=>30,'productCount'=>1,
            'cargoDetail'=>['city'=>55,'shippingPayment'=>'B','shippingWhere'=>'COUNTRY','cargoCompanyDetails'=>['cargoCompanyDetail'=>[
                'name'=>'ARAS','cityPrice'=>3.00,'countryPrice'=>5.00
            ]],'shippingTime'=>['days'=>'today','beforeTime'=>10.00]],'affiliateOption'=>false,'boldOption'=>false,'catalogOption'=>false,'vitrineOption'=>false,'globalTradeItemNo'=>312321,'manufacturerPartNo'=>'GO12345OOGLE'



        ],'forceToSpecEntry'=>false,'nextDateOption'=>false,'lang'=>'tr'];
        $url = "https://dev.gittigidiyor.com:8443/listingapi/ws/IndividualProductService?wsdl";

        $soapClient = new SoapClient($url, array('login' => $auth_user, 'password' => $auth_pass, 'authentication' => SOAP_AUTHENTICATION_BASIC));
        $result = $soapClient->__soapCall('updateProductSales', $params);
        prex($result);
    }
}