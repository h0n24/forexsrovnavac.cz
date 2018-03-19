{{settings}}
  "language": "cs",
  "template": 2,
  "header": "tenx",
  "meta" : {
    "title": "TenX kurz (PAY) - Aktuální graf a vývoj ceny v PAY//USD/EUR/BTC",
    "description": "Graf a vývoj TenX kurzu, aktuální graf a kurz kryptoměny TenX. Cena TenX se neustále mění a tak hodnota TenX neustále kolísá",
    "keywords": "TenX kurz, TenX hodnota, Kurzy TenX, Tenx obchodování, TenX"
  }
{{/settings}}




{{section}}

## **TenX kurz (PAY)** - Aktuální graf a vývoj ceny k Dolaru **(PAY/USD)** 


<!-- TradingView Widget BEGIN -->
<script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
<script type="text/javascript">
new TradingView.widget({
  "width": "100%",
  "height": 400,
  "symbol": "BITTREX:PAYUSD",
  "interval": "60",
  "timezone": "Etc/UTC",
  "theme": "White",
  "style": "3",
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

{{partial: podgrafem}}

{{/section}}


{{section}}

## **TenX kurz (PAY)** - Aktuální graf a vývoj ceny k EURU **(PAY/EUR)**

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
var theUrl = baseUrl+'serve/v3/coin/chart?fsym=PAY&tsyms=EUR,';
s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
embedder.parentNode.appendChild(s);
})();
</script>
<!-- TradingView Widget END -->


{{/section}}

{{section}}
## **TenX kurz (PAY)** - Aktuální graf a vývoj ceny k BITCOINU **(PAY/BTC)**

<!-- TradingView Widget BEGIN -->
<script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
<script type="text/javascript">
new TradingView.widget({
  "width": "100%",
  "height": 400,
  "symbol": "BITTREX:PAYBTC",
  "interval": "60",
  "timezone": "Etc/UTC",
  "theme": "White",
  "style": "3",
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
{{partial: podgrafem}}

{{/section}}

Cena TenX, Kurz za 1 TenX (zkr. PAY) je zobrazena v měně konkrétní burzy, tj. USD (americké dolary) v případě burzy (USD) a Kraken (EUR) a Bitfinex pro (BTC). Najdete zde vývoj kurzu virtuální měny TenX z období cca posledního půl roku. Jednotlivé "svíčky" (candlesticks) označují aktuální cenu za jeden TenX. Stopka označuje minimální a maximální kurz. Vývoj kurzu si můžete prohlédnout na cca 5 minutových grafech, až po roční grafy. Kurz TenX se zobrazuje s cca 5 minutovým zpožděním.
- - -






