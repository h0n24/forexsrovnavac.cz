<?php

namespace Jirkae;

require_once(__DIR__.'/../lastRSS.php');

class GoogleFinancialFeed {

    private $url;

    public function __construct($url) {
        $this->url = $url;
        $this->parseFeed();
    }

    private function parseFeed() {
        //$data = file_get_contents($this->url);        
        $lastRss = new \lastRSS();
        if (!file_exists(__DIR__.'/googleFeedCache')) {
          mkdir(__DIR__.'/googleFeedCache');
        }
        $lastRss->cache_dir = __DIR__.'/googleFeedCache';
        $lastRss->cache_time = 3600;
        $lastRss->cp = 'UTF-8';
        $lastRss->date_format = 'd. m. Y';
        $lastRss->stripHTML = TRUE;       
        
        //$simpleXml = new \SimpleXMLElement($data);
        return $lastRss->Get($this->url);
    }

    public function render() {
        ob_start();
        $feed = $this->parseFeed();
        require __DIR__ . '/googleFinancialFeedTemplate.php';
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

}
