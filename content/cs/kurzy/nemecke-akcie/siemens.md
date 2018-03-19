{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Akcie SIEMENS",
"widget" : {
    "symbol": "SIE.F"
},
"detail" : {
    "ticker": "FRA:SIE",
    "burza": "NMC",
    "odvetvi": "Průmysl"
},
"meta" : {
    "title": "Akcie SIEMENS ~ aktuální graf a vývoj ceny, diskuze",
    "description": "Aktuální graf a vývoj ceny akcií SIEMENS, tato společnost patří mezi největší výrobce elektroniky a technologií na světě",
    "keywords": "Akcie SIEMENS"
}
{{/settings}}

<h2>SIEMENS - aktuální graf a vývoj ceny v EUR</h2>
        
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
                <div class="iframeContainer tradingview" style="height: 600px;">                                
                    <!-- TradingView Widget BEGIN -->                    
                    <iframe src="http://marketools.plus500.com/Widgets/InstrumentChartContainer?hl=cs&cty=CZ&id=66349&tags=widg+chart&pl=2&instSymb=SIE.DE" style="height: 600px; border: none;" scrolling="no"></iframe>
                    <!-- TradingView Widget END -->                    
                </div>


                {{partial: kurzy/detail-alert}}
                <div class="googleFeedContainer">
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=FRA:SIE&ei=vcLNV9CmIs-NsQGfloSgAg&output=rss"}}                    
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