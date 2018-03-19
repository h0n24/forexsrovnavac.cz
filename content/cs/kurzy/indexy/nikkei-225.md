{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Index Nikkei 225",
"detail" : {
    "ticker": "INDEX:IUX",
    "burza": "Nikkei",
    "odvetvi": "Japonsko"
},
"meta" : {
    "title": "Japonské akcie - Index Nikkei-225 ~ aktuální kurz, graf, diskuze",
    "description": "Nikkei 225 je japonský akciový index, který se skládá z 225 nejvýznamnějších akciových titulů obchodovaných na tokijské burze",
    "keywords": "Index Nikkei-225 Japonsko"
}
{{/settings}}

<h2>Nikkei 225 - aktuální graf a vývoj ceny</h2>

>Nikkei 225 je japonský akciový index, který se skládá z 225 nejvýznamnějších akciových titulů obchodovaných na tokijské burze
        
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
                    <iframe src="http://marketools.plus500.com/Widgets/InstrumentChartContainer?hl=cs&cty=CZ&id=66349&tags=widg+chart&pl=2&instSymb=NIY" style="height: 600px; border: none;" scrolling="no"></iframe>
                    <!-- TradingView Widget END -->                    
                </div>
                {{partial: kurzy/detail-alert}}
                <div class="googleFeedContainer">
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=INDEXNIKKEI:NI225&ei=RCztV8nkKovFsAHQv6CICQ&output=rss"}}                    
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