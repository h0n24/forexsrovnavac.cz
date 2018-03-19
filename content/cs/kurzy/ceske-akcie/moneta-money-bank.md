{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Akcie Moneta Money bank a.s",
"detail" : {
    "ticker": "MONET:PRA",
    "burza": "BURZA CENNÝCH PAPÍRŮ PRAHA (PSE)",
    "odvetvi": "SLUŽBY/FINANCE"
},
"meta" : {
    "title": "Akcie Moneta Money bank a.s ~ aktuální cena a vývoj akcií online, diskuze",
    "description": "Podívejte se na Aktuální graf a vývoj ceny akcií Moneta money bank obchodováných na přažské burze cenných papírů",
    "keywords": "MONET:PRA, akcie, Akcie Moneta Money bank a.s"
}
{{/settings}}

<h2>Moneta Money bank a.s - aktuální graf a vývoj ceny</h2>
        
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
                <iframe src="http://markets.ft.com/data/equities/tearsheet/summary?s=MONET:PRA" style="height: 1000px;" scrolling="no"></iframe>
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