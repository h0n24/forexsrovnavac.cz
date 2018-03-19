{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayoutAktualni",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "RWE AG",
"widget" : {
    "symbol": "RWE.F"
},
"detail" : {
    "ticker": "FRA:RWE",
    "burza": "NMC",
    "odvetvi": "Energie"
},
"meta" : {
    "title": "Akcie RWE - aktuální graf a vývoj ceny, diskuze",
    "description": "Aktuální graf a vývoj ceny akcií RWE, německého výrobce elektřiny z konvenčních zdrojů a obchodníka s energiemi.",
    "keywords": "Akcie RWE"
}
{{/settings}}

<h2>RWE AG - aktuální graf a vývoj ceny v EUR</h2>

>**Společnost RWE** patří k předním evropským energetickým společnostem a obsluhuje v různých zemích Evropy více než 16 mil. zákazníků. RWE se zabývá širokou škálou činností v energetické oblasti, od průzkumu a těžby ropy přes výrobu elektřiny a její distribuci až po distribuci zemního plynu a obnovitelné zdroje. 

>**RWE** patří mezi tři největší výrobce elektřiny v Německu, Velké Británii nebo například v Nizozemsku a v posledních letech silně expandovala také v zemích střední a východní Evropy, včetně České republiky. Zde dodává zákazníkům zemní plyn a v posledních měsících také prodává elektrickou energii stále většímu počtu českých domácností. Firma je také v čele evropského vývoje v oblasti obnovitelných zdrojů energie.
        
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
                      "symbol": "FRA:RWE",
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
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=FRA:RWE&ei=kcLNV5CYEtaHswG98pvoDg&output=rss"}}                    
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