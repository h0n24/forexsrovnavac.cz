{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Akcie CETIN",
"detail" : {
    "ticker": "CETIN:PSE",
    "burza": "BURZA CENNÝCH PAPÍRŮ PRAHA (PSE)",
    "odvetvi": "SLUŽBY/TELEKOMUNIKACE"
},
"meta" : {
    "title": "Akcie CETIN  ~ aktuální cena a vývoj akcií online, diskuze",
    "description": "Podívejte se na Aktuální graf a vývoj ceny akcií CETIN obchodováných na přažské burze cenných papírů",
    "keywords": "CETIN:PSE, akcie, Akcie CETIN"
}
{{/settings}}

<h2>CETIN - aktuální graf a vývoj ceny</h2>
        
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
                <iframe src="http://markets.ft.com/research/InteractiveChart?symbol=88817882&options={"StartDate":null,"EndDate":null,"LowerIndicator":[{"Args":[{"Type":0,"Value":14}],"Code":21,"UID":1313857793}],"UpperIndicator":[],"Overlay":[],"ChartStyle":3,"ChartScale":1,"CursorStyle":0,"Interval":3,"Duration":1,"Comparison":[],"PortfolioName":null,"Width":950,"Height":400,"ActiveTool":null}" width="100%" height="880px" marginheight="0px" frameborder="0" style="border:none; padding-top:0px; " scrolling="no" style="height: 1000px;" scrolling="no"></iframe>
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