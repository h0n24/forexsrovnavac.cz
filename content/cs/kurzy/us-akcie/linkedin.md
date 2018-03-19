{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "LinkedIn",
"detail" : {
    "ticker": "NYSE:LNKD",
    "burza": "US",
    "odvetvi": "ODVETVI"
},
"meta" : {
    "title": "Akcie LinkedIn - aktuální graf a vývoj ceny ",
    "description": "",
    "keywords": "Akcie LinkedIn"
}
{{/settings}}

<h2>LinkedIn - aktuální graf a vývoj ceny</h2>

>**LinkedIn je jedna** z firem současné vlny akcií internetových služeb, které vstoupily na burzu v nedávných letech. Nejznámější sociální sítí je samozřejmě Facebook. LinkedIn je v podstatě obdobou Facebooku ve světě profesních a pracovních vztahů, a je v tomto oboru světovou jedničkou.

>**Příjmy společnosti** plynou ze tří různých kanálů. Prvním z nich je placené členství – to oproti základnímu, které je zdarma, nabízí rozšířené množství služeb, jež jsou v základní podobě omezeny. Dalším zdrojem jsou poplatky za personální služby (vyhledávání pracovníků atd.) a za marketingové služby.
        
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
                <div class="iframeContainer tradingview">                                
                    <!-- TradingView Widget BEGIN -->
                    <script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
                    <script type="text/javascript">
                    new TradingView.widget({
                      "autosize": true,
                      "symbol": "NYSE:LNKD",
                      "interval": "15",
                      "timezone": "Europe/Warsaw",
                      "theme": "White",
                      "style": "1",
                      "locale": "en",
                      "toolbar_bg": "#f1f3f6",
                      "enable_publishing": false,
                      "allow_symbol_change": true,
                      "hideideas": true,
                      "show_popup_button": true,
                      "popup_width": "1000",
                      "popup_height": "650"
                    });
                    </script>
                    <!-- TradingView Widget END -->  
                </div>
                {{partial: kurzy/detail-alert}}
                <div class="googleFeedContainer">
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=NYSE:LNKD&ei=nQUBWLjpOMvDsAGIh6XQCQ&output=rss"}}                    
                </div>
                <div class="clear"></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                {{partial: kurzy/us-akcie}}
            </div>
            <div role="tabpanel" class="tab-pane" id="discussion">
                {{discussion}}
            </div>
        </div>
        
    
   

    </div>
</div>