{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Google",
"detail" : {
    "ticker": "NASDAQ:GOOGL",
    "burza": "NASDAQ",
    "odvetvi": "Informařní Technologie"
},
"meta" : {
    "title": "Akcie Google Inc - aktuální graf a vývoj ceny, diskuze",
    "description": "Google",
    "keywords": "Akcie Google"
}
{{/settings}}

<h2>Google - aktuální graf a vývoj ceny</h2>

>Google je nejpopulárnějším internetovým vyhledávačem na světě, je jen několik zemí, kde nezaujímá pozici jedničky na trhu. Google je v současnosti druhou nejcennější obchodní značkou na světě. Největší část příjmů tvoří samozřejmě tržby z internetové reklamy, což je segment, který i v krizi vykazoval růst.

>Vedle klasického vyhledávače poskytuje řadu dalších webových služeb – patří pod něj např. portál YouTube nebo mobilní operační systém Android.
        
<div id="mainBox">
    <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Graf vývoje</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Další akcie</a></li>            
            <li role="presentation"><a href="#discussion" aria-controls="discussion" role="tab" data-toggle="tab">Diskuze</a></li>            
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="iframeContainer tradingview">                                
                    <!-- TradingView Widget BEGIN -->
                    <script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
                    <script type="text/javascript">
                    new TradingView.widget({
                      "autosize": true,
                      "symbol": "NASDAQ:GOOGL",
                      "interval": "15",
                      "timezone": "Europe/Warsaw",
                      "theme": "White",
                      "style": "1",
                      "locale": "en",
                      "toolbar_bg": "#f1f3f6",
                      "enable_publishing": false,
                      "allow_symbol_change": true,
                      "hideideas": true,
                      "show_popup_button": true,
                      "popup_width": "1000",
                      "popup_height": "650"
                    });
                    </script>
                    <!-- TradingView Widget END -->                    
                </div>
                {{partial: kurzy/detail-alert}}
                <div class="googleFeedContainer">
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=NASDAQ:GOOGL&ei=hAQBWPGbMIHhsAGuv73ABA&output=rss"}}                    
                </div>
                <div class="clear"></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                {{partial: kurzy/us-akcie}}
            </div>
            <div role="tabpanel" class="tab-pane" id="discussion">
                {{discussion}}
            </div>
        </div>

    </div>
</div>