{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "IBM",
"detail" : {
    "ticker": "NYSE:IBM",
    "burza": "New York",
    "odvetvi": "Informační technologie"
},
"meta" : {
    "title": "Akcie IBM - aktuální graf a vývoj ceny, diskuze",
    "description": "IBM",
    "keywords": "Akcie IBM"
}
{{/settings}}

<h2>IBM - aktuální graf a vývoj ceny</h2>

>IBM patří k firmám, které od začátku IT businessu patří k předním jménům. Historie společnosti sahá až do roku 1911 a vždy měla co do činění se zpracováním dat – od nástupu počítačů se držela a stále drží v popředí. Dodnes klade důraz na inovace a hledání nových řešení.

>Společnost pokrývá oblast produkce jak softwaru, tak hardwaru. Poskytuje řešení např. v oblasti serverů, správy a ukládání datových souborů nebo nejrůznějšího obchodního a technického softwaru, zejména pro firmy.
        
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
                      "symbol": "NYSE:IBM",
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
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=NYSE:IBM&ei=OwUBWMC7AcjEsAGz1pnwCA&output=rss"}}                    
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