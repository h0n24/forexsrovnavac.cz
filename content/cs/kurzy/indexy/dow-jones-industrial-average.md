{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Index Dow jones (DJIA)",
"detail" : {
    "ticker": "TVC:DJI",
    "burza": "DJI",
    "odvetvi": "USA"
},
"meta" : {
    "title": "Index Dow jones (DJIA) ~ aktuální kurz, graf, diskuze",
    "description": "Dow jones industrial average se skládá z 30 akcií amerických společností, které patří mezi největší a nejvíce obchodované na americké burze",
    "keywords": "Index Dow jones (DJIA)"
}
{{/settings}}


<h2>Dow jones industrial average - aktuální graf a vývoj ceny</h2>

>Dow jones industrial average se skládá z 30 akcií amerických společností, které patří mezi největší a nejvíce obchodované na americké burze
        
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
                    <iframe src="http://marketools.plus500.com/Widgets/InstrumentChartContainer?hl=cs&cty=CZ&id=66349&tags=widg+chart&pl=2&instSymb=YM" style="height: 600px; border: none;" scrolling="no"></iframe>
                    <!-- TradingView Widget END -->                    
                </div>
                {{partial: kurzy/detail-alert}}
                <div class="googleFeedContainer">
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=INDEXDJX:.DJI&ei=XCztV_DRHomosgH8rLyQAg&output=rss"}}                    
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