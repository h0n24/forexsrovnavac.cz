{{settings}}
  "language": "cs",
  "template": 5,
  "header": "kurzy",
  "meta" : {
    "title": "Akcie apple",
    "description": "",
    "keywords": "Akcie apple"
  }
{{/settings}}
<script type="text/javascript">
    var url = "http://query.yahooapis.com/v1/public/yql";
    var symbol = 'AAPL';
    var data = encodeURIComponent("select * from yahoo.finance.quotes where symbol in ('" + symbol + "')");

    $.getJSON(url, 'q=' + data + "&format=json&diagnostics=true&env=http://datatables.org/alltables.env")
        .done(function (data) {
            $("#name").text(data.query.results.quote.Symbol);
            $("#date").text(data.query.results.quote.Date);
            $("#time").text(data.query.results.quote.LastTradeTime);
            $("#timen").text(data.query.results.quote.LastTradeTime);
            $("#result").text(data.query.results.quote.LastTradePriceOnly);
            $("#chg").text(data.query.results.quote.PercentChange);
            $("#chgb").text(data.query.results.quote.PercentChange);
            $("#bid").text(data.query.results.quote.LastTradePriceOnly);
            $("#bidb").text(data.query.results.quote.LastTradePriceOnly);
            $("#ask").text(data.query.results.quote.Ask);
            $("#volume").text(data.query.results.quote.Volume);
            $("#high").text(data.query.results.quote.HighLimit);
            $("#low").text(data.query.results.quote.LowLimit);

            if (data.query.results.quote.PercentChange.indexOf("+") != -1) {

                document.getElementById("chg").className = "greenText";
                //document.getElementById("chgb").className = "greenText";
                $("#chgb").addClass("greenText");
            }
            else {
                //alert(data.query.results.quote.PercentChange);

                document.getElementById("chg").className = "redText";
                //document.getElementById("chgb").className = "redText";
                $("#chgb").addClass("redText");
            }

        }).fail(function (jqxhr, textStatus, error) {
        var err = textStatus + ", " + error;
        $("#result").text('Request failed: ' + err);
    });
</script>


<div class="col-md-3 visible-xs">
<style>
.gsc-input-box {
height: 30px;
margin-top: 10px;
margin-left: 45px;
}

.cse .gsc-search-button input.gsc-search-button-v2, input.gsc-search-button-v2 {
margin-top: 12px;
height: 28px;
width: 70px;
}

hr {
display: block;
height: 1px;
border: 5px;
border-top: 1px solid #000000;
margin: 1em 0;
padding: 0;
}
</style>
<script src="./Akcie apple_files/6708.js" async="" type="text/javascript"></script>
<script async="" src="./Akcie apple_files/analytics.js"></script>
<script type="text/javascript" async="" src="./Akcie apple_files/cse.js"></script>
<script>
(function () {
var cx = '004554116648847298078:hctsadgejas';
var gcse = document.createElement('script');
gcse.type = 'text/javascript';
gcse.async = true;
gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
'//cse.google.com/cse.js?cx=' + cx;
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(gcse, s);
})();
</script>

</div>
<div style="margin-left: 10px" class="row">
<h1>Nadpis</h1>
</div>
<div class="row">
<div class="col-lg-7">
<div style="margin-left: 10px" class="row">

<div class="col-lg-3 col-ms-12">
<div class="row">
<p style="float: left" class="datab">Poptávka: </p><p style="float: left" id="bidb" class="data"></p>
</div>
<div class="row">

<p style="float: left" class="datab">%Chg: </p><p style="float: left" id="chgb" class="data"></p>
</div>
</div>

<div class="col-lg-5 col-ms-12">
<table class="table">
<thead>
<tr>
<th>#</th>
<th>Popis</th>
<th>Hodnota</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Čas</td>
<td><span id="time"></span></td>

</tr>
<tr>
<td>5</td>
<td>Cena nabídky</td>
<td><span id="ask"></span></td>
</tr>
<tr>
<td>1</td>
<td>Volume</td>
<td><span id="volume"></span></td>
</tr>
</tbody>
</table>
</div><div class="col-lg-8 col-ms-12">
</div>
</div>
<div>
<div style="margin-top: 0px; background-color: #f8f8f8" class="row">
<div style="margin-left: 15px; margin-right: 15px; height: 350px">
<h2>Nadpis2</h2>
<!-- TradingView Widget BEGIN -->
<script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
<script type="text/javascript">
new TradingView.widget({
"autosize": true,
  "symbol": "AAPL",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "White",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "allow_symbol_change": true,
  "hideideas": true,
  "show_popup_button": true,
  "popup_width": "1000",
  "popup_height": "650",
  "no_referral_id": true
});
</script>
<!-- TradingView Widget END -->

</div>
<p style="padding: 30px; font-size: 10px; margin-top: 20px" class='statement'><span
class="badge">Upozornění</span> Informace poskytované na
Forexsrovnávač.cz jsou určeny ke studijním účelům témat týkajících se obchodování na
finančních
trzích. Zřeknutí se odpovědnosti: Informace neslouží v žádném případě, coby nějaké
investiční či
obchodní doporučení, ani analýzy investičních příležitostí, ani nemají jejich parametry.
Provozovatel serveru Forexsrovnávač.cz ani jednotliví autoři nejsou registrovanými brokery
či
investičním poradcem ani makléřem. Investování na kapitálovém trhu je rizikové. Autoři
nejsou
zodpovědní za případné chyby nebo nepřesnosti zveřejněné na tomto portále. Autoři nejsou
zodpovědní za žádnou ztrátu pocházející z investic , nákupů nebo obchodů založených na
informacích zde zveřejněné. Informace zveřejněné na tomto blogu prezentují pouze osobní
názory ,
zkušenosti a poznatky autorů a nepovažují se za doporučení pro konkrétní osobu nebo
návštěvníka.
Veškeré obchodní značky, které jsou na tomto webu uvedeny, neslouží k poskytnutí finanční
služby, ani investičního doporučení z naší strany. Kliknutí na reklamní prvek nemá na cenu
či
kvalitu služeb pro koncového uživatele žádný vliv ani neumožňuje Provozovateli identifikaci
osobních údajů zákazníka. <a href="http://www.forexsrovnavac.cz/podminky">Podmínky používání
webu</a>

</p>
</div>
</div>
            
<div class="row">
<div style="margin-top: 40px" class="col-lg-3 col-ms-12">
{{partial: panel-brokeri}}
</div>
<div style="padding-right: 70px" class="col-lg-9 col-ms-12">
<h3 style="margin-left: 45px" >Diskuze</h3>
<div style="margin-left: 45px;" class="fb-comments" data-href="http://www.forexsrovnavac.cz/akcie/apple"      data-numposts="10"
                                                                                                             data-width="100%"
                                                                                                             data-colorscheme="light"></div>
</div>
</div>
</div>
<!-- /.col-lg-8 -->
<div class="col-lg-5">
                <div class="visible-lg">
                <div>
                    <script type="text/javascript">
                        new TradingView.MiniWidget({
                            "container_id": "widget-2",
                            "tabs": [
                                "Crypto",
                                "Forex",
                                "Commodities"
                            ],
                            "symbols": {
                                "Crypto": [
                                    ["BTC/EUR", "KRAKEN:XBTEUR"],
                                    ["LTC/EUR", "KRAKEN:LTCEUR"],
                                    ["NMC/EUR", "KRAKEN:NMCEUR"],
                                    ["BTC/LTC", "KRAKEN:XBTLTC"],
                                    ["BTC/DGE", "KRAKEN:XBTXDG"]
                                ],
                                "Forex": [
                                    ["EUR/USD", "FX:EURUSD"],
                                    ["GBP/USD", "FX:GBPUSD"],
                                    ["USD/JPY", "FX:USDJPY"],
                                    ["USD/CHF", "FX:USDCHF"],
                                    ["AUD/USD", "FX:AUDUSD"],
                                    ["USD/CAD", "FX:USDCAD"]
                                ],
                                "Commodities": [
                                    [
                                        "Gold",
                                        "GC1!"
                                    ],
                                    [
                                        "Oil",
                                        "CL1!"
                                    ],
                                    [
                                        "Gas",
                                        "NG1!"
                                    ],
                                    [
                                        "Corn",
                                        "ZC1!"
                                    ]
                                ]
                            },
                            "gridLineColor": "#E9E9EA",
                            "fontColor": "#83888D",
                            "underLineColor": "#F0F0F0",
                            "timeAxisBackgroundColor": "#FFFFFF",
                            "trendLineColor": "#FF7965",
                            "activeTickerBackgroundColor": "#EDF0F3",
                            "large_chart_url": "https://www.tradingview.com/e/",
                            "noGraph": false,
                            "width": 400
                        });
                    </script>
                </div>
                <div class="panel-body">
                    <div class="row" style="margin-left: 0px">
                        <!--<div class="rssDiv">-->
                        <p><strong>Zprávy</strong></p>
                        <div id="rss_obal">
                            <div id="divRss"></div>
                        </div>
                        <!--</div>-->
                    </div>
                </div>
                </div>
                <div class="visible-xs visible-ms visible-md">
                    <div>
                        <script type="text/javascript">
                            new TradingView.MiniWidget({
                                "container_id": "widget-2",
                                "tabs": [
                                    "Crypto",
                                    "Forex",
                                    "Commodities"
                                ],
                                "symbols": {
                                    "Crypto": [
                                        ["BTC/EUR", "KRAKEN:XBTEUR"],
                                        ["LTC/EUR", "KRAKEN:LTCEUR"],
                                        ["NMC/EUR", "KRAKEN:NMCEUR"],
                                        ["BTC/LTC", "KRAKEN:XBTLTC"],
                                        ["BTC/DGE", "KRAKEN:XBTXDG"]
                                    ],
                                    "Forex": [
                                        ["EUR/USD", "FX:EURUSD"],
                                        ["GBP/USD", "FX:GBPUSD"],
                                        ["USD/JPY", "FX:USDJPY"],
                                        ["USD/CHF", "FX:USDCHF"],
                                        ["AUD/USD", "FX:AUDUSD"],
                                        ["USD/CAD", "FX:USDCAD"]
                                    ],
                                    "Commodities": [
                                        [
                                            "Gold",
                                            "GC1!"
                                        ],
                                        [
                                            "Oil",
                                            "CL1!"
                                        ],
                                        [
                                            "Gas",
                                            "NG1!"
                                        ],
                                        [
                                            "Corn",
                                            "ZC1!"
                                        ]
                                    ]
                                },
                                "gridLineColor": "#E9E9EA",
                                "fontColor": "#83888D",
                                "underLineColor": "#F0F0F0",
                                "timeAxisBackgroundColor": "#FFFFFF",
                                "trendLineColor": "#FF7965",
                                "activeTickerBackgroundColor": "#EDF0F3",
                                "large_chart_url": "https://www.tradingview.com/e/",
                                "noGraph": false,
                                "width": 300
                            });
                        </script>
                    </div>
                    <div class="panel-body">
                        <div class="row" style="margin-left: 0px">
                            <!--<div class="rssDiv">-->
                            <p><strong>Zprávy</strong></p>
                            <div id="rss_obal_small">
                                <div id="divRssSmall"></div>
                            </div>
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
</div>