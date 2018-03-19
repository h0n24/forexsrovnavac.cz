{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Cena Zlata",
"detail" : {
    "ticker": "TVC:GOLD",
    "burza": "TVC - CFD",
    "odvetvi": "Komodity"
},
"meta" : {
    "title": "Zlato ~ aktuální graf a vývoj ceny na burze",
    "description": "Podívejte se na aktuální i historické grafy a vývoj ceny Zlata v měně USD na světových burzách. ",
    "keywords": "Zlato"
}
{{/settings}}

<h2>Zlato - aktuální graf a vývoj ceny v měně USD</h2>
        
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
                <div class="iframeContainer tradingview" style="height: 600px;">                                
                    <!-- TradingView Widget BEGIN -->                    
                    <iframe src="http://marketools.plus500.com/Widgets/InstrumentChartContainer?hl=cs&cty=CZ&id=66349&tags=widg+chart&pl=2&instSymb=XAU" style="height: 600px; border: none;" scrolling="no"></iframe>
                    <!-- TradingView Widget END -->                    
                </div>
                {{partial: kurzy/detail-alert}}
                <div class="googleFeedContainer">
                    {{googleFeed url=>""}}                    
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