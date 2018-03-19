{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayoutAktualni",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Akcie CETV",
"detail" : {
    "ticker": "CETV:PSE",
    "burza": "BURZA CENNÝCH PAPÍRŮ PRAHA (PSE)",
    "odvetvi": "MÉDIA/POZEMNÍ VYSÍLÁNÍ"
},
"meta" : {
    "title": "Akcie CETV ~ aktuální cena a vývoj akcií online, diskuze",
    "description": "Podívejte se na Aktuální graf a vývoj ceny akcií CETV obchodováných na přažské burze cenných papírů",
    "keywords": "CETV:PSE, akcie, Akcie CETV"
}
{{/settings}}

<h2>CETV - aktuální graf a vývoj ceny</h2>
        
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
            
<iframe frameBorder='0' scrolling='no' width='1000' height='600' src='https://api.stockdio.com/visualization/financial/charts/v1/HistoricalPrices?app-key=60DAB24D243E4E0D8A37E290F73BD3DD&stockExchange=BCPP&symbol=CETV&dividends=true&splits=true&palette=Financial-Light&width=1000px&height=600px'></iframe>
              
                {{partial: kurzy/detail-alert}}
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                {{partial: kurzy/ceske-akcie}}
            </div>
            <div role="tabpanel" class="tab-pane" id="discussion">
                {{discussion}}
            </div>
        </div>

    </div>
</div>