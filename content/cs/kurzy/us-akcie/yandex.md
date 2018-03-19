{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Yandex",
"detail" : {
    "ticker": "NASDAQ:YNDX",
    "burza": "Nasdaq",
    "odvetvi": "Informační Technologie"
},
"meta" : {
    "title": "Akcie Yandex - aktuální graf a vývoj ceny, diskuze",
    "description": "Yandex",
    "keywords": "Akcie Yandex"
}
{{/settings}}

<h2>Yandex - aktuální graf a vývoj ceny</h2>

>Yandex je ruský webový portál a vyhledávač, obdoba našeho Seznam.cz. Rusko patří k těm mála trhům, kde nemá [Google](http://www.forexsrovnavac.cz/kurzy/us-akcie/google) postavení naprosté jedničky. Tuto pozici zaujímá právě Yandex, jehož akcie se obchodují na americkém trhu Nasdaq

>Většina tržeb pochází z internetové reklamy, prostřednictvím webového portálu je možno zadavatelům nabídnout vhodné cílení, jak oborově, tak např. geograficky.

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
                      "symbol": "NASDAQ:YNDX",
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
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=NASDAQ:YNDX&ei=EAkBWJmGJYigsgH10IWICQ&output=rss"}}                    
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