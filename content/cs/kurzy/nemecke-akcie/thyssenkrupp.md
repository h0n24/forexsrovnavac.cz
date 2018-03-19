{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayoutAktualni",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Akcie THYSSENKRUPP",
"widget" : {
    "symbol": "TKA.F"
},
"detail" : {
    "ticker": "FRA:TKA",
    "burza": "NMC",
    "odvetvi": "Průmysl"
},
"meta" : {
    "title": "Akcie THYSSENKRUPP ~ aktuální graf a vývoj ceny, diskuze",
    "description": "Aktuální graf a vývoj ceny akcií THYSSENKRUPP, tato společnost je největší technologický a ocelářský podnik v Némecku",
    "keywords": "Akcie THYSSENKRUPP"
}
{{/settings}}

<h2>THYSSENKRUPP - aktuální graf a vývoj ceny v EUR</h2>
        
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
                      "symbol": "FRA:TKA",
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
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=FRA:TKA&ei=28LNV6icDoGGswGwh6rgCA&output=rss"}}                    
                </div>
                <div class="clear"></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                {{partial: kurzy/nemecke-akcie}}
            </div>
            <div role="tabpanel" class="tab-pane" id="discussion">
                {{discussion}}
            </div>
        </div>

    </div>
</div>