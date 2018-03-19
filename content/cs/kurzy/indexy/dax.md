{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Index DAX",
"detail" : {
    "ticker": "TVC:DAX",
    "burza": "DAX",
    "odvetvi": "Německo"
},
"meta" : {
    "title": "Index DAX Německo ~ aktuální kurz, graf, diskuze",
    "description": "DAX je německý burzovní index Frankfurtské burzy, skládá se z 30 hlavních německých akcií obchodovaných na frankfurtské burze",
    "keywords": "Index DAX Německ"
}
{{/settings}}

<h2>DAX - aktuální graf a vývoj ceny</h2>

>DAX je německý burzovní index Frankfurtské burzy, skládá se z 30 hlavních německých akcií obchodovaných na frankfurtské burze

        
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
                    <iframe src="http://marketools.plus500.com/Widgets/InstrumentChartContainer?hl=cs&cty=CZ&id=66349&tags=widg+chart&pl=2&instSymb=FDAX" style="height: 600px; border: none;" scrolling="no"></iframe>
                    <!-- TradingView Widget END -->                    
                </div>
                {{partial: kurzy/detail-alert}}
                <div class="googleFeedContainer">
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=INDEXDB:DAX&ei=aSztV6mxB4vDsAHKyLeoAw&output=rss"}}                    
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