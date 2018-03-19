{{settings}}
  "language": "cs",
  "template": 2,
  "header": "neo",
  "meta" : {
    "title": "NEO (Neo) kurz, aktuální graf a vývoj ceny v NEO/BTC/USD/EUR",
    "description": "Graf a vývoj NEO kurzu, aktuální grafy a kurzy kryptoměny NEO. Cena NEO se neustále mění a tak hodnota této kryptoměny neustále kolísá",
    "keywords": "NEO kurz, NEO hodnota, NEO, NEO obchodování,"
  }
{{/settings}}




{{section}}

## NEO kurz, aktuální graf a vývoj ceny k Dolaru **(NEO/USD)** 

<!-- TradingView Widget BEGIN -->
<script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
<script type="text/javascript">
new TradingView.widget({
  "width": "100%",
  "height": 400,
  "symbol": "BITFINEX:NEOUSD",
  "interval": "60",
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
});

</script>
<!-- TradingView Widget END -->

{{/section}}


{{section}}
## NEO kurz, aktuální graf a vývoj ceny k EURU **(NEO/EUR)**

<!-- TradingView Widget BEGIN -->
<script type="text/javascript">
baseUrl = "https://widgets.cryptocompare.com/";
var scripts = document.getElementsByTagName("script");
var embedder = scripts[ scripts.length - 1 ];
(function (){
var appName = encodeURIComponent(window.location.hostname);
if(appName==""){appName="local";}
var s = document.createElement("script");
s.type = "text/javascript";
s.async = true;
var theUrl = baseUrl+'serve/v3/coin/chart?fsym=NEO&tsyms=EUR,';
s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
embedder.parentNode.appendChild(s);
})();
</script>
<!-- TradingView Widget END -->


{{/section}}

{{partial: podgrafem}}

{{section}}


## NEO kurz, aktuální graf a vývoj ceny k Bitcoinu **(NEO/BTC)**

<!-- TradingView Widget BEGIN -->
<script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
<script type="text/javascript">
new TradingView.widget({
  "width": "100%",
  "height": 400,
  "symbol": "BITFINEX:NEOBTC",
  "interval": "60",
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
});

</script>
<!-- TradingView Widget END -->
{{/section}}

- - -
Cena NEO, Kurz za 1 NEO (zkr. XMR) je zobrazena v měně konkrétní burzy, tj. USD (americké dolary) v případě burzy (USD) a Kraken (EUR) a Bitfinex pro (BTC). Najdete zde vývoj kurzu virtuální měny NEO z období cca posledního půl roku. Jednotlivé "svíčky" (candlesticks) označují aktuální cenu za jedeno NEO. Stopka označuje minimální a maximální kurz. Vývoj kurzu si můžete prohlédnout na cca 5 minutových grafech, až po roční grafy. Kurz Monera se zobrazuje s cca 5 minutovým zpožděním.
- - -





