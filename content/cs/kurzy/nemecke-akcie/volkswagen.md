{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayoutAktualni",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Akcie VOLKSWAGEN",
"widget" : {
    "symbol": "VOW3.F"
},
"detail" : {
    "ticker": "FRA:VOW3",
    "burza": "NMC",
    "odvetvi": "Automobily"
},
"meta" : {
    "title": "Akcie VOLKSWAGEN ~ aktuální graf a vývoj ceny, diskuze",
    "description": "Aktuální graf a vývoj ceny akcií VOLKSWAGEN, přední německé automobilky",
    "keywords": "Akcie VOLKSWAGEN"
}
{{/settings}}

<h2>VOLKSWAGEN AG - aktuální graf a vývoj ceny v EUR</h2>
        
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
                      "symbol": "FRA:VOW3",
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
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=FRA:VOW3&ei=OsTNV5nRDNLKsQH4tI3YDg&output=rss-"}}                    
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