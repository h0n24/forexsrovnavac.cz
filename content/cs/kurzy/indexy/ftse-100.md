{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Index FTSE 100",
"detail" : {
    "ticker": "TVC:UKX",
    "burza": "FTSE",
    "odvetvi": "Anglie"
},
"meta" : {
    "title": "Anglické akcie - Index FTSE 100 ~ aktuální kurz, graf, diskuze",
    "description": "Index FTSE 100 - zahrnuje akcie 100 společností s nejvyšší tržní kapitalizací, které sídlí ve Velké Británii, a obchodují se na londýnské burze (London Stock Exchange)",
    "keywords": "Index FTSE 100"
}
{{/settings}}

<h2>FTSE 100 - aktuální graf a vývoj ceny</h2>

>Index FTSE 100 - zahrnuje akcie 100 společností s nejvyšší tržní kapitalizací, které sídlí ve Velké Británii, a obchodují se na londýnské burze (London Stock Exchange)
        
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
                    <iframe src="http://marketools.plus500.com/Widgets/InstrumentChartContainer?hl=cs&cty=CZ&id=66349&tags=widg+chart&pl=2&instSymb=UK100" style="height: 600px; border: none;" scrolling="no"></iframe>
                    <!-- TradingView Widget END -->                    
                </div>
                {{partial: kurzy/detail-alert}}
                <div class="googleFeedContainer">
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=INDEXFTSE:UKX&ei=cyztV9iLOM-MswGKmoy4BA&output=rss"}}                    
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