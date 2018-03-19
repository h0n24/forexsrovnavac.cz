{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Index Nasdaq",
"detail" : {
    "ticker": "TVC:NDX",
    "burza": "NSQ",
    "odvetvi": "USA"
},
"meta" : {
    "title": "Index Nasdaq USA ~ aktuální kurz, graf, diskuze ",
    "description": "NASDAQ je největší ryze elektronický burzovní trh v USA s více jak 3900 kótovanými společnostmi a je zároveň třetí největší burza na světě",
    "keywords": "Index Nasdaq"
}
{{/settings}}

<h2>Nasdaq - aktuální graf a vývoj ceny</h2>

>NASDAQ je největší ryze elektronický burzovní trh v USA s více jak 3900 kótovanými společnostmi a je zároveň třetí největší burza na světě.
        
<div id="mainBox">
    <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Graf vývoje</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Další indexy</a></li>            
            <li role="presentation"><a href="#discussion" aria-controls="discussion" role="tab" data-toggle="tab">Diskuze</a></li>            
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="iframeContainer tradingview" style="height: 600px;">                                
                    <!-- TradingView Widget BEGIN -->                    
                    <iframe src="http://marketools.plus500.com/Widgets/InstrumentChartContainer?hl=cs&cty=CZ&id=66349&tags=widg+chart&pl=2&instSymb=NQ" style="height: 600px; border: none;" scrolling="no"></iframe>
                    <!-- TradingView Widget END -->                    
                </div>
                {{partial: kurzy/detail-alert}}
                <div class="googleFeedContainer">
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=INDEXNASDAQ:.IXIC&ei=LCztV7DJDIqqsQGyvoPgCw&output=rss"}}                    
                </div>
                <div class="clear"></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                {{partial: kurzy/indexy}}
            </div>
            <div role="tabpanel" class="tab-pane" id="discussion">
                {{discussion}}
            </div>
        </div>

    </div>
</div>