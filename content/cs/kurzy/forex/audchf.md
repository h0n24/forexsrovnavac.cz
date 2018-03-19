{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayoutAktualni",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "AUD/CHF",
"widget" : {
    "symbol": "AUDCHF=X"
},
"detail" : {
    "ticker": "FX:AUDCHF",
    "burza": "FXCM",
    "odvetvi": "Forex/Měny"
},
"meta" : {
    "title": "AUD/CHF - Kurz, graf Australský dolar vs. Svýcarský frank",
    "description": "Aktuální graf a vývoj kurzu AUD/CHF Austraulského dolaru a Švýcarského franku",
    "keywords": "AUDCHF"
}
{{/settings}}

<h2>AUD/CHF - aktuální graf a vývoj kurzu</h2>
        
<div id="mainBox">
    <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Graf vývoje</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Další forex</a></li>            
            <li role="presentation"><a href="#discussion" aria-controls="discussion" role="tab" data-toggle="tab">Diskuze</a></li>
            <li role="presentation"><a href="#ekonomicky-kalendar" aria-controls="ekonomicky-kalendar" role="tab" data-toggle="tab">Ekonomický kalednář</a></li>                
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
                      "symbol": "FX:AUDCHF",
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
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=CURRENCY:AUD&ei=uoLMV8CFE4GGswGwh6rgCA&output=rss"}}                    
                </div>
                <div class="clear"></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                {{partial: kurzy/forex}}
            </div>
            <div role="tabpanel" class="tab-pane" id="discussion">
                {{discussion}}
            </div>
            <div role="tabpanel" class="tab-pane" id="ekonomicky-kalendar">
                
               
<!-- TradingView Widget BEGIN -->
<span id="tradingview-quotes">Market quotes are powered by <a href="http://www.tradingview.com" rel="nofollow" target="_blank" style="color: #3BB3E4">TradingView.com</a></span>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js">
{
  "width": "1140",
  "height": "545",
  "importanceFilter": "-1,0,1",
  "currencyFilter": "EUR,USD,JPY,GBP,CHF,AUD,CAD,NZD,CNY"
}
</script>
<!-- TradingView Widget END -->
                
                
              
                
                
            </div>
        </div>

    </div>
</div>