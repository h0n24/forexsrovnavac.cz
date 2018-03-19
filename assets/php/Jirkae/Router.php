<?php

namespace Jirkae;

class Router {

    public function __construct() {
        if (isset($_GET['tvwidgetsymbol'])) {
            $this->kurzyWidgerRedirect($_GET['tvwidgetsymbol']);            
        }
    }

    public function kurzyWidgerRedirect($symbol) {
        $path = NULL;
        switch ($symbol) {
            case 'INDEX:SPX': 
                $path = 'indexy/spx';
                break;
            case 'INDEX:IUXX': 
                $path = 'indexy/ndx';
                break;       
            case 'DOWI': 
                $path = 'indexy/dji';
                break;                    
            case 'INDEX:NKY': 
                $path = 'indexy/jpn225';
                break;
            case 'FX:EURUSD': 
                $path = 'forex/eurusd';
                break;
            case 'FX:GBPUSD': 
                $path = 'forex/gbpusd';
                break;
            case 'FX:USDJPY': 
                $path = 'forex/usdjpy';
                break;
            case 'FX:USDCHF': 
                $path = 'forex/usdchf';
                break;
            case 'FX:AUDUSD': 
                $path = 'forex/audusd';
                break;
            case 'FX:USDCAD': 
                $path = 'forex/usdcad';
                break;
            case 'GC1!': 
                $path = 'komodity/gold';
                break;
            case 'CL1!': 
                $path = 'komodity/crude-oil';
                break;
            case 'NG1!': 
                $path = 'komodity/plyn';
                break;
            case 'TVC:SILVER': 
                $path = 'komodity/silver';
                break;
            case 'AAPL': 
                $path = 'us-akcie/apple';
                break;
            case 'GOOG': 
                $path = 'us-akcie/google';
                break;
            case 'NASDAQ:FB': 
                $path = 'us-akcie/facebook';
                break;
            case 'NYSE:TWTR': 
                $path = 'us-akcie/twitter';
                break;
            case 'NYSE:BABA': 
                $path = 'us-akcie/alibaba';
                break;
            case 'NASDAQ:AMZN': 
                $path = 'us-akcie/amazon';
                break;            
        }
        if ($path !== NULL) {
            header("HTTP/1.1 301 Moved Permanently"); 
            header('Location: ' . (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/kurzy/' . $path);
            die;
        }
    }

}
