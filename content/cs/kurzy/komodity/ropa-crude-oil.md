{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Crude OIL",
"detail" : {
    "ticker": "NYMEX:CL1!",
    "burza": "TVC - CFD",
    "odvetvi": "Komodity"
},
"meta" : {
    "title": "Crude OIL ~ aktuální graf a vývoj ceny na burze",
    "description": "Podívejte se na aktuální graf a vývoj ceny ropy Crude oil v měně USD. Crude oil je známá, jako americká lehká ropa",
    "keywords": "Crude OIL"
}
{{/settings}}

<h2>Crude OIL - aktuální graf a vývoj ceny v měně USD</h2>
        
<div id="mainBox">
    <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Graf vývoje</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Další komodity</a></li>            
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
                      "symbol": "NYMEX:CL1!",
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
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=NYSEARCA:OIL&ei=P7R2WPGiBIPKsQH_7qPoCw&output=rss"}}                    
                </div>
                <div class="clear"></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                {{partial: kurzy/komodity}}
            </div>
            <div role="tabpanel" class="tab-pane" id="discussion">
                {{discussion}}
            </div>
        </div>

    </div>
</div>