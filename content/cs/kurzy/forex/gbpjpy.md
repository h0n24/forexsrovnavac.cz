{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayoutAktualni",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "GBP/JPY",
"widget" : {
    "symbol": "GBPJPY=X"
},
"detail" : {
    "ticker": "FX:GBPJPY",
    "burza": "FXCM",
    "odvetvi": "Forex/Měny"
},
"meta" : {
    "title": "GBP/JPY - Kurz, graf Britská libra vs Japonský yen",
    "description": "Aktuální graf a vývoj kurzu GBP/JPY - Britské libry a Japonského yenu",
    "keywords": "GBPJPY"
}
{{/settings}}

<h2>GBP/JPY - aktuální graf a vývoj kurzu</h2>
        
<div id="mainBox">
    <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Graf vývoje</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Další forex</a></li>            
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
                      "symbol": "FX:GBPJPY",
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
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=CURRENCY:GBP&ei=SIPMV7C2PIqqsQGyvoPgCw&output=rss"}}                    
                </div>
                <div class="clear"></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                {{partial: kurzy/forex}}
            </div>
            <div role="tabpanel" class="tab-pane" id="discussion">
                {{discussion}}
            </div>
        </div>

    </div>
</div>